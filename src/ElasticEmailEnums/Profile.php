<?php
	namespace ElasticEmailEnums; 

class Profile
{
    /**
     * First name.
     */
    public /*string*/ $FirstName;

    /**
     * Last name.
     */
    public /*string*/ $LastName;

    /**
     * Company name.
     */
    public /*string*/ $Company;

    /**
     * First line of address.
     */
    public /*string*/ $Address1;

    /**
     * Second line of address.
     */
    public /*string*/ $Address2;

    /**
     * City.
     */
    public /*string*/ $City;

    /**
     * State or province.
     */
    public /*string*/ $State;

    /**
     * Zip/postal code.
     */
    public /*string*/ $Zip;

    /**
     * Numeric ID of country. A file with the list of countries is available <a href="http://api.elasticemail.com/public/countries"><b>here</b></a>
     */
    public /*?int*/ $CountryID;

    /**
     * Phone number
     */
    public /*string*/ $Phone;

    /**
     * Proper email address.
     */
    public /*string*/ $Email;

    /**
     * Code used for tax purposes.
     */
    public /*string*/ $TaxCode;

    /**
     * Why your clients are receiving your emails.
     */
    public /*string*/ $DeliveryReason;

    /**
     * True if you want to receive newsletters from Elastic Email. Otherwise, false. Empty to leave the current value.
     */
    public /*?bool*/ $MarketingConsent;

    /**
     * HTTP address of your website.
     */
    public /*string*/ $Website;

    /**
     * URL to your logo image.
     */
    public /*string*/ $LogoUrl;

}
