<?php

namespace OffbeatWP\LocalSeo;

class AddSeoFields
{
    const ID = 'local-seo';
    const PRIORITY = 1;

    public function title()
    {
        return __('Seo', 'raow');
    }

    public function form()
    {

        $form = new \OffbeatWP\Form\Form();
        $form->addTab('general-information', 'General information');
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_name', 'Company name'));

        $priceRange = \OffbeatWP\Form\Fields\Select::make('company_price_range', 'Price class');
        $localCompanyKind = \OffbeatWP\Form\Fields\Select::make('company_kind', 'Company Kind');


        $priceRange->addOptions(['$$$' => '$$$', '$$' => '$$', '$' => '$']);

        $form->addField($priceRange);

        $openingsdays = \OffbeatWP\Form\Fields\Select::make('opening_hours', 'Openings Hours');

        $openingsdays->addOptions([
            'Monday' => 'Monday',
            'Tuesday' => 'Tuesday',
            'Wednesday' => 'Wednesday',
            'Thursday' => 'Thursday',
            'Friday' => 'Friday',
            'Saturday' => 'Saturday',
            'Sunday' => 'Sunday',
        ]);

        $localCompanyKind->addOptions([
            'AnimalShelter' => 'AnimalShelter',
            'ArchiveOrganization' => 'ArchiveOrganization',
            'AutomotiveBusiness' => 'AutomotiveBusiness',
            'AutoBodyShop' => 'AutoBodyShop',
            'AutoDealer' => 'AutoDealer',
            'AutoPartsStore' => 'AutoPartsStore',
            'AutoRental' => 'AutoRental',
            'AutoRepair' => 'AutoRepair',
            'AutoWash' => 'AutoWash',
            'GasStation' => 'GasStation',
            'MotorcycleDealer' => 'MotorcycleDealer',
            'MotorcycleRepair' => 'MotorcycleRepair',
            'ChildCare' => 'ChildCare',
            'Dentist' => 'Dentist',
            'DryCleaningOrLaundry' => 'DryCleaningOrLaundry',
            'EmergencyService' => 'EmergencyService',
            'FireStation' => 'FireStation',
            'Hospital' => 'Hospital',
            'PoliceStation' => 'PoliceStation',
            'EmploymentAgency' => 'EmploymentAgency',
            'EntertainmentBusiness' => 'EntertainmentBusiness',
            'AdultEntertainment' => 'AdultEntertainment',
            'AmusementPark' => 'AmusementPark',
            'ArtGallery' => 'ArtGallery',
            'Casino' => 'Casino',
            'ComedyClub' => 'ComedyClub',
            'MovieTheater' => 'MovieTheater',
            'NightClub' => 'NightClub',
            'FinancialService' => 'FinancialService',
            'AccountingService' => 'AccountingService',
            'AutomatedTeller' => 'AutomatedTeller',
            'BankOrCreditUnion' => 'BankOrCreditUnion',
            'InsuranceAgency' => 'InsuranceAgency',
            'FoodEstablishment' => 'FoodEstablishment',
            'Bakery' => 'Bakery',
            'BarOrPub' => 'BarOrPub',
            'Brewery' => 'Brewery',
            'CafeOrCoffeeShop' => 'CafeOrCoffeeShop',
            'Distillery' => 'Distillery',
            'FastFoodRestaurant' => 'FastFoodRestaurant',
            'IceCreamShop' => 'IceCreamShop',
            'Restaurant' => 'Restaurant',
            'Winery' => 'Winery',
            'GovernmentOffice' => 'GovernmentOffice',
            'PostOffice' => 'PostOffice',
            'HealthAndBeautyBusiness' => 'HealthAndBeautyBusiness',
            'BeautySalon' => 'BeautySalon',
            'DaySpa' => 'DaySpa',
            'HairSalon' => 'HairSalon',
            'HealthClub' => 'HealthClub',
            'NailSalon' => 'NailSalon',
            'TattooParlor' => 'TattooParlor',
            'HomeAndConstructionBusiness' => 'HomeAndConstructionBusiness',
            'Electrician' => 'Electrician',
            'GeneralContractor' => 'GeneralContractor',
            'HVACBusiness' => 'HVACBusiness',
            'HousePainter' => 'HousePainter',
            'Locksmith' => 'Locksmith',
            'MovingCompany' => 'MovingCompany',
            'Plumber' => 'Plumber',
            'RoofingContractor' => 'RoofingContractor',
            'InternetCafe' => 'InternetCafe',
            'LegalService' => 'LegalService',
            'Attorney' => 'Attorney',
            'Notary' => 'Notary',
            'Library' => 'Library',
            'LodgingBusiness' => 'LodgingBusiness',
            'BedAndBreakfast' => 'BedAndBreakfast',
            'Campground' => 'Campground',
            'Hostel' => 'Hostel',
            'Hotel' => 'Hotel',
            'Motel' => 'Motel',
            'Resort' => 'Resort',
            'MedicalBusiness' => 'MedicalBusiness',
            'CommunityHealth ' => 'CommunityHealth',
            'Dentist ' => 'Dentist',
            'Dermatology ' => 'Dermatology',
            'DietNutrition ' => 'DietNutrition',
            'Emergency ' => 'Emergency',
            'Geriatric ' => 'Geriatric',
            'Gynecologic ' => 'Gynecologic',
            'MedicalClinic' => 'MedicalClinic',
            'Midwifery ' => 'Midwifery',
            'Nursing ' => 'Nursing',
            'Obstetric ' => 'Obstetric',
            'Oncologic ' => 'Oncologic',
            'Optician' => 'Optician',
            'Optometric ' => 'Optometric',
            'Otolaryngologic ' => 'Otolaryngologic',
            'Pediatric ' => 'Pediatric',
            'Pharmacy' => 'Pharmacy',
            'Physician' => 'Physician',
            'Physiotherapy ' => 'Physiotherapy',
            'PlasticSurgery ' => 'PlasticSurgery',
            'Podiatric ' => 'Podiatric',
            'PrimaryCare ' => 'PrimaryCare',
            'Psychiatric ' => 'Psychiatric',
            'PublicHealth ' => 'PublicHealth',
            'ProfessionalService' => 'ProfessionalService',
            'RadioStation' => 'RadioStation',
            'RealEstateAgent' => 'RealEstateAgent',
            'RecyclingCenter' => 'RecyclingCenter',
            'SelfStorage' => 'SelfStorage',
            'ShoppingCenter' => 'ShoppingCenter',
            'SportsActivityLocation' => 'SportsActivityLocation',
            'BowlingAlley' => 'BowlingAlley',
            'ExerciseGym' => 'ExerciseGym',
            'GolfCourse' => 'GolfCourse',
            'HealthClub ' => 'HealthClub',
            'PublicSwimmingPool' => 'PublicSwimmingPool',
            'SkiResort' => 'SkiResort',
            'SportsClub' => 'SportsClub',
            'StadiumOrArena' => 'StadiumOrArena',
            'TennisComplex' => 'TennisComplex',
            'Store' => 'Store',
            'AutoPartsStore ' => 'AutoPartsStore',
            'BikeStore' => 'BikeStore',
            'BookStore' => 'BookStore',
            'ClothingStore' => 'ClothingStore',
            'ComputerStore' => 'ComputerStore',
            'ConvenienceStore' => 'ConvenienceStore',
            'DepartmentStore' => 'DepartmentStore',
            'ElectronicsStore' => 'ElectronicsStore',
            'Florist' => 'Florist',
            'FurnitureStore' => 'FurnitureStore',
            'GardenStore' => 'GardenStore',
            'GroceryStore' => 'GroceryStore',
            'HardwareStore' => 'HardwareStore',
            'HobbyShop' => 'HobbyShop',
            'HomeGoodsStore' => 'HomeGoodsStore',
            'JewelryStore' => 'JewelryStore',
            'LiquorStore' => 'LiquorStore',
            'MensClothingStore' => 'MensClothingStore',
            'MobilePhoneStore' => 'MobilePhoneStore',
            'MovieRentalStore' => 'MovieRentalStore',
            'MusicStore' => 'MusicStore',
            'OfficeEquipmentStore' => 'OfficeEquipmentStore',
            'OutletStore' => 'OutletStore',
            'PawnShop' => 'PawnShop',
            'PetStore' => 'PetStore',
            'ShoeStore' => 'ShoeStore',
            'SportingGoodsStore' => 'SportingGoodsStore',
            'TireShop' => 'TireShop',
            'ToyStore' => 'ToyStore',
            'WholesaleStore' => 'WholesaleStore',
            'TelevisionStation' => 'TelevisionStation',
            'TouristInformationCenter' => 'TouristInformationCenter',
            'TravelAgency' => 'TravelAgency',
            'MedicalOrganization' => 'MedicalOrganization',
            'Dentist ' => 'Dentist',
            'DiagnosticLab' => 'DiagnosticLab',
            'Hospital ' => 'Hospital',
            'MedicalClinic ' => 'MedicalClinic',
            'Pharmacy ' => 'Pharmacy',
            'Physician ' => 'Physician',
            'VeterinaryCare' => 'VeterinaryCare',
        ]);


        $countries =  \OffbeatWP\Form\Fields\Select::make('countries', 'Countries');

        $countries->addOptions(\OffbeatWP\LocalSeo\data\Location::country());

        $closingTime = \OffbeatWP\Form\Fields\Select::make('closing_time', 'Closing time');
        $openingHours = \OffbeatWP\Form\Fields\Select::make('opening_time', 'Opening time');
        $closingTime->addOptions(\OffbeatWP\LocalSeo\data\DateTime::Time());
        $openingHours->addOptions(\OffbeatWP\LocalSeo\data\DateTime::Time());
        $form->addField($localCompanyKind);
        $form->addTab('contact-information', 'Contact details');
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_fax', 'Fax number'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_phone', 'Telephone number'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_street', 'Street'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_number', 'Number'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_zip_code', 'Zip code'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_place', 'Place (City)'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_province', 'Province'));
        $form->addField($countries);
        $form->addTab('opening-hours', 'Opening hours');
        $form->addRepeater('opening-hours-selector',
            'Opening hours')->addField($openingsdays)->addField($openingHours)->addField($closingTime);

        return $form;

    }
}
