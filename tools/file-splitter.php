<?php
    /**
     * BASED ON: https://github.com/zvictorinc/splitMulticlassFile
     * splitMulticlassFile.php
     *
     * A "multiclass file" is a file containing more than one class definition.
     *
     * Requirements of the source file
     * 1. Class declaration begin and end must be on their own distinct lines:
     *    There must be a newline after one class declaration ends.
     *
     *     Example 1. Valid:
     *       class Foo {
     *         const BAZ = 'baz';
     *       }
     *       class Bar {
     *         const BAL = 'bal';
     *       }
     *
     *     Example 2. Valid:
     *       if (!class_exists('Foo')) {
     *         class Foo {
     *           const BAR = 'bar';
     *         }
     *       }
     *       if (!class_exists('Bar')) {
     *         class Bar {
     *           const BAL = 'bal';
     *       }}
     *
     * 2. Remove white space at the beginning of the line of each class declaration start and end.
     *
     * 3. Does not support Interface declarations (due to the behavior of get_defined_classes()]
     *
     * @param $multiclassFile string Path to source "multiclass file"
     * @param $outputDir string Save class files to this directory. Create it if it doesn't exist.
     * @param $namespace string Namespace to use. Optional
     */

    /*
     * Parse parameters to define $multiclassFile, $outputDir, and $namespace
     */
    $errorMessage = <<<ERRMSG
The splitMulticlassFile.php script takes three parameters:

1. Path to the multiclass file (i.e., file containing many class definitions)
   In the example below, the file is LotsOfClasses.php and is in
   the same directory as the script itself.

2. Path to the directory for the output class files.
   In the example below, the classLibrary directory will be created
   in the folder of this script if does not already exist.

3. Optional namespace for the class declarations.
   In the example below, the namespace is classy

   Example call:
     php splitMulticlassFile.php LotsOfClasses.php classLibrary classy


ERRMSG;

// If there are fewer than two given parameters, then error and exit.
    $argCount = count($argv);
    if (count($argv) < 3)
    {
        echo "\nERROR: Missing parameters.\n\n", $errorMessage;
        exit;
    }
    $multiclassFile = $argv[1];
    $outputDir = $argv[2];
    $namespace = isset($argv[3]) ? $argv[3] : '';

    /*
     * Prepare source and destination
     */

// Does source file exist as a regular file? If not, then error and exit.
    if (!is_file($multiclassFile))
    {
        echo "\nERROR: $multiclassFile does not exist or is not a regular file.\n\n", $errorMessage;
        exit;
    }

// Does destination directory exist? If not, then create it.
    if (!is_dir($outputDir))
    {
        mkdir($outputDir, 0755, true);
        chmod($outputDir, 0755);
    }

    /** @var array $multiclassLines Get class code as array, one line of code per array element */
    $multiclassLines = file($multiclassFile);

    /** @var SplFileInfo $FileInfo Inspect the multiclass file as an object */
    $FileInfo = new SplFileInfo($multiclassFile);

    /** @var string $realPath Full path of the multiclass file */
    $realPath = $FileInfo->getRealPath();
    unset($FileInfo);

// Include the multiclass file and declare its classes.
    require($multiclassFile);

    /** @var array $declaredClasses Names of all declared classes, including those of the multiclass file */
    $declaredClasses = get_declared_classes();

    /** @var array $multiclassFileClasses Each element will be one class: its name, code, etc. */
    $multiclassFileClasses = [];

// Echo output in CSV w column headers
    echo "Class,Bytes\n";

// Filter the declared classes, keeping only those declared in the multiclass file.
    foreach($declaredClasses as $class)
    {
        // Reflect each declared class to discover its file source
        /** @var ReflectionClass $R Reflect each declared class to get file and source code info */
        $R = new ReflectionClass($class);
        // If the declared class comes from the multiclass file, then save it
        if ($realPath == $R->getFilename())
        {
            // Open the code string PHP tag and optionally define a namespace
            $multiclassFileClasses[$class] = "<?php\n" . "\tnamespace " . $R->getNamespaceName() ."; \n\n";

            $destDir = $outputDir . DIRECTORY_SEPARATOR . $R->getNamespaceName();
            if (!is_dir( $destDir))
            {
                mkdir($destDir, 0755, true);
                chmod($destDir, 0755);
            }

            // Get the code line by line from the source file, saving it to the output array
            for ($i = $R->getStartLine() - 1; $i < $R->getEndLine(); ++$i)
            {
                // Every line before last line: save line as is
                if ($i < $R->getEndLine() - 1)
                {
                    $multiclassFileClasses[$class] .= $multiclassLines[$i];
                }
                // Last line: remove double }} that can happen when class is nested in "if (!class_exists("
                else
                {
                    $multiclassFileClasses[$class] .= preg_replace('/^}}$/', '}', $multiclassLines[$i]);
                }
                unset($multiclassLines[$i]);
            }

            // Save the class to a file
            //var_dump($outputDir, $class);
            $fileHandle = fopen( $destDir . DIRECTORY_SEPARATOR . $R->getShortName() . '.php', 'w');
            $bytesWritten = fwrite($fileHandle, $multiclassFileClasses[$class]);
            fclose($fileHandle);
            echo $R->getShortName() . ".php,$bytesWritten\n";
        }
    }



    exit;