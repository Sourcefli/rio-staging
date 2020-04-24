<?php
//
//use Illuminate\Database\Seeder;
//
//class WebsiteDataSeeder extends Seeder
//{
//    /**
//     * Run the database seeds.
//     *
//     * @return void
//     */
//    public function run()
//    {
//
//        option([
//            'asbswData' => [
//                "corpName" => "American Senior Benefits",
//                "fullName" => "American Senior Benefits Southwest",
//                "shortName" => "ASB Southwest",
//                "abbr" => "ASBsw",
//                "email" => "info@retirementinsuranceoptions.com",
//                "adminEmail" => "admin@retirementinsuranceoptions.com",
//                "website" => "https://retirementinsuranceoptions.com",
//                "tollFree" => "1 (888) 601-3580",
//                "phone" => "1 (702) 529-4410",
//                "fax" => "1 (702) 463-7645",
//                "streetOne" => "6029 S Fort Apache Rd",
//                "streetTwo" => "#130",
//                "csZip" => "Las Vegas, NV 89148",
//                "state" => "full",
//                "ST" => "NV",
//                "serviceAreas" => [
//                    "nv" => "Las Vegas, NV",
//                    "sd" => "San Diego, CA",
//                    "sac" => "Sacramento, CA"
//                ],
//                "hours" => "9:00am to 5:00pm"
//            ],
//            "ssbData" => [
//                "legalName" => "Southwest Senior Benefits, LLC",
//                "name" => "Southwest Senior Benefits"
//            ],
//            "management" => [
//                "fullName" => "Management Team",
//                "first" => "Management",
//                "last" => "Team",
//                "email" => "admin@retirementinsuranceoptions.com",
//                "phone" => "1 (888) 601-3580",
//                "bio" => "",
//                "startedOn" => "",
//                "role" => "Regional Management Team",
//                "title" => "",
//                "facebookUrl" => "https://facebook.com/americanseniorbenefitsSW",
//                "linkedInUrl" => "",
//                "qualifications" => "Management, Customer or Client Support"
//            ],
//            "dHavens" => [
//                "fullName" => "Don Havens",
//                "first" => "Don",
//                "last" => "Havens",
//                "email" => "donald.havens@gmail.com",
//                "phone" => "1 (702) 529-4118",
//                "bio" => "Don Havens Bio...",
//                "startedOn" => "10-08-1985",
//                "role" => "Regional Sales Manager",
//                "title" => "RSM",
//                "facebookUrl" => "",
//                "linkedInUrl" => "",
//                "qualifications" => "Management, Agent Resources"
//            ],
//            "jLawson" => [
//                "fullName" => "Jennifer Lawson",
//                "first" => "Jennifer",
//                "last" => "Lawson",
//                "email" => "admin@retirementinsuranceoptions.com",
//                "phone" => "1 (702) 529-4410",
//                "bio" => "Jennifer Lawson Bio...",
//                "startedOn" => "11-02-2019",
//                "role" => "Regional Administrator",
//                "title" => "Admin",
//                "facebookUrl" => "",
//                "linkedInUrl" => "",
//                "qualifications" => "Management, Customer Service, Agent Resources"
//            ],
//            "rSchlemmer" => [
//                "fullName" => "Rich Schlemmer",
//                "first" => "Rich",
//                "last" => "Schlemmer",
//                "email" => "rschlemm@gmail.com",
//                "phone" => "1 (702) 326-2554",
//                "bio" => "Rich Schlemmers Bio",
//                "startedOn" => "?",
//                "role" => "Certified Senior Advisor",
//                "title" => "Agent",
//                "facebookUrl" => "",
//                "linkedInUrl" => "",
//                "qualifications" => "Life, Medicare, Income Protection"
//            ],
//            "sBantz" => [
//                "fullName" => "Shawn Bantz",
//                "first" => "Shawn",
//                "last" => "Bantz",
//                "email" => "shawnbantz@gmail.com",
//                "phone" => "1 (402) 217-2315",
//                "bio" => "Shawn Bantz Bio",
//                "startedOn" => "?",
//                "role" => "Agent",
//                "title" => "Agent",
//                "facebookUrl" => "",
//                "linkedInUrl" => "",
//                "qualifications" => "Life, Medicare, Income Protection"
//            ],
//            "rAtkins" => [
//                "fullName" => "Russel Atkins",
//                "first" => "Russel",
//                "last" => "Atkins",
//                "email" => "russatkins25@gmail.com",
//                "phone" => "1 (702) 325-8805",
//                "bio" => "Russel Atkins Bio",
//                "startedOn" => "?",
//                "role" => "Agent",
//                "title" => "Agent",
//                "facebookUrl" => "",
//                "linkedInUrl" => "",
//                "qualifications" => "Life, Medicare, Income Protection"
//            ],
//            "sLange" => [
//                "fullName" => "Shawn Lange",
//                "first" => "Shawn",
//                "last" => "Lange",
//                "email" => "shawnlange76@gmail.com",
//                "phone" => "1 (702) 339-6003",
//                "bio" => "Shawn Lange Bio",
//                "startedOn" => "?",
//                "role" => "Agent",
//                "title" => "Agent",
//                "facebookUrl" => "",
//                "linkedInUrl" => "",
//                "qualifications" => "Life, Medicare, Income Protection"
//            ],
//            "rFink" => [
//                "fullName" => "Rich Finkelstein",
//                "first" => "Rich",
//                "last" => "Finkelstein",
//                "email" => "richfink@yahoo.com",
//                "phone" => "1 (310) 938-5345",
//                "bio" => "Rich Finkelstein Bio",
//                "startedOn" => "?",
//                "role" => "Financial Advisor",
//                "title" => "Agent",
//                "facebookUrl" => "",
//                "linkedInUrl" => "",
//                "qualifications" => "Life, Medicare, Financial Advisor"
//            ],
//            "mCrain" => [
//                "fullName" => "Monica Crain",
//                "first" => "Monica",
//                "last" => "Crain",
//                "email" => "monicaw880@gmail.com",
//                "phone" => "1 (503) 753-8056",
//                "bio" => "Monica Crain Bio",
//                "startedOn" => "?",
//                "role" => "Agent",
//                "title" => "",
//                "facebookUrl" => "",
//                "linkedInUrl" => "",
//                "qualifications" => "Life, Medicare, Income Protection"
//            ],
//            "rEdwards" => [
//                "fullName" => "Richard Edwards",
//                "first" => "Richard",
//                "last" => "Edwards",
//                "email" => "rck333@aol.com",
//                "phone" => "1 (254)855-4238",
//                "bio" => "Richard Edwards Bio",
//                "startedOn" => "?",
//                "role" => "Agent",
//                "title" => "",
//                "facebookUrl" => "",
//                "linkedInUrl" => "",
//                "qualifications" => "Life, Medicare, Income Protection"
//            ],
//            "aetna" => [
//                "name" => "Aetna",
//                "smImg" => "img/carriers/aetna-logo-sm.jpg",
//                "generalSupport" => "1 (800) 872-3862",
//                "customerSupport" => "1 (800) 358-8749",
//                "supportUrl" => "https://www.aetna.com/individuals-families/member-rights-resources/member-services.html",
//                "homePageUrl" => "https://www.aetna.com/individuals-families.html"
//            ],
//            "cigna" => [
//                "name" => "Cigna",
//                "smImg" => "img/carriers/cigna-logo-sm.jpg",
//                "generalSupport" => "1 (800) 997-1654",
//                "customerSupport" => "1 (866) 459-4272",
//                "supportUrl" => "https://www.cigna.com/contact-us/",
//                "homePageUrl" => "https://www.cigna.com/"
//            ],
//            "mutualOfOmaha" => [
//                "name" => "Mutual Of Omaha",
//                "smImg" => "img/carriers/mutual-of-omaha-logo-sm.png",
//                "generalSupport" => "1 (800) 228-7104",
//                "customerSupport" => "1 (800) 775-1000",
//                "supportUrl" => "https://www.mutualofomaha.com/support/phone",
//                "homePageUrl" => "https://www.mutualofomaha.com"
//            ],
//            "transamerica" => [
//                "name" => "Transamerica",
//                "smImg" => "img/carriers/transamerica-logo-sm.jpg",
//                "generalSupport" => "1 (800) 797-2643",
//                "customerSupport" => "1 (800) 797-2643",
//                "supportUrl" => "https://www.transamerica.com/contact-us/",
//                "homePageUrl" => "https://www.transamerica.com/"
//            ],
//            "humana" => [
//                "name" => "Humana",
//                "smImg" => "img/carriers/humana-logo-sm.jpg",
//                "generalSupport" => "1 (844) 330-7799",
//                "customerSupport" => "1 (800) 457-4708",
//                "supportUrl" => "https://www.humana.com/help",
//                "homePageUrl" => "https://www.humana.com"
//            ],
//            "unitedHealthcare" => [
//                "name" => "Unitedhealthcare",
//                "smImg" => "img/carriers/united-healthcare-logo-sm.jpg",
//                "generalSupport" => "1 (866) 414-1959",
//                "customerSupport" => "1 (800) 523-5800",
//                "supportUrl" => "https://www.uhc.com/contact-us",
//                "homePageUrl" => "https://www.uhc.com/"
//            ],
//            "aig" => [
//                "name" => "AIG",
//                "smImg" => "img/carriers/aig-logo-sm.jpg",
//                "generalSupport" => "1 (800) 448-2542",
//                "customerSupport" => "1 (800) 888-2452",
//                "supportUrl" => "https://www.aig.com/individual/insurance/life/life-contact-us",
//                "homePageUrl" => "https://www.aig.com/"
//            ],
//            "royalNeighbors" => [
//                "name" => "Royal Neighbors of America",
//                "smImg" => "img/carriers/royal-neighbors-logo-sm.jpg",
//                "generalSupport" => "1 (800) 627-4762",
//                "customerSupport" => "1 (800) 627-4762",
//                "supportUrl" => "https://www.royalneighbors.org/about-us/contact-us",
//                "homePageUrl" => "https://www.royalneighbors.org/"
//            ],
//            "devInfo" => [
//                "name" => "Jonathan Havens",
//                "email" => "jh@sourcefli.com",
//                "website" => "https://sourcefli.com",
//                "phone" => "702-570-2354",
//                "url" => "http://localhost:3000"
//            ],
//            "form_quote_selections" => [
//                "General Medicare",
//                "Medicare Advantage",
//                "Medicare Supplement",
//                "Medicare Coverage Gaps",
//                "Preparing For Retirement",
//                "Financial Planning",
//                "Retirement Income",
//                "Life Insurance",
//                "Final Expenses",
//                "Extended Care",
//                "Nursing Homes &amp; Coverage",
//                "Other"
//            ],
//            "form_quote_bestTime" => [
//                "Morning",
//                "Afternoon",
//                "Evening"
//            ],
//            "form_quote_referredBy" => [
//                "Friend",
//                "Craigslist",
//                "Facebook",
//                "Google",
//                "Email Received",
//                "Text Received",
//                "ZipRecruiter",
//                "Indeed",
//                "AmericanSeniorBenefits.com",
//            ],
//            "form_contact_selections" => [
//                "Medicare Benefits or Options",
//                "Burial Expenses",
//                "Retirement Planning",
//                "Retirement Benefits",
//                "Social Security Income",
//                "Income Protection",
//                "Advanced Life Insurance",
//                "Asset Diversification",
//                "Claiming Benefits",
//                "Recent Life Event(s)",
//                "Extended Care Coverage",
//                "Other"
//            ],
//            "form_contact_bestTime" => [
//                "Morning",
//                "Afternoon",
//                "Evening"
//            ],
//            "form_contact_referredBy" => [
//                "Friend",
//                "Craigslist",
//                "Facebook",
//                "Google",
//                "Email Received",
//                "Text Received",
//                "ZipRecruiter",
//                "Indeed",
//                "AmericanSeniorBenefits.com",
//            ],
//            'home_cardOne' => [
//                'title' => '',
//                'summary' => '',
//                'img' => ''
//            ],
//            'home_cardTwo' => [
//                'title' => '',
//                'summary' => '',
//                'img' => ''
//            ],
//            'home_cardThree' => [
//                'title' => '',
//                'summary' => '',
//                'img' => ''
//            ],
//            "hero_inner_about" => "A message for the about banner",
//            "hero_inner_services" => "A message for the services banner",
//            "hero_inner_clientResources" => "A message for the client resources banner",
//            "hero_inner_contact" => "A message for the contact banner",
//            "hero_inner_quote" => "A message for the quotes banner",
//            "hero_inner_blog" => "A message for the blog banner",
//            "hero_inner_faqs" => "A message for the FAQ banner",
//            "hero_inner_serviceDetails" => [
//                "wiseRetirement" => "A message for the wise retirement banner",
//                "protectedInvestments" => "A message for the protected investments banner",
//                "diversify" => "A message for the diversification banner",
//                "theUnexpected" => "A message for the 'unexpected' banner",
//                "medicare360" => "A message for the medicare360 banner",
//                "burialPlanning" => "A message for the burial planning banner"
//            ],
//            "fallback" => "A message that shows as a fallback"
//        ]);
//    }
//}
