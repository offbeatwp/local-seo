<?php

namespace OffbeatWP\LocalSeo;

class SettingsScripts
{
    const ID = 'scripts';
    const PRIORITY = 1;

    public function title()
    {
        return __('Seo', 'raow');
    }

    public function form()
    {

        $form = new \OffbeatWP\Form\Form();
        $form->addTab('general-information', 'Algemene gegevens');
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_name', 'Bedrijfsnaam'));

        $priceRange = \OffbeatWP\Form\Fields\Select::make('company_price_range', 'Prijsklasse');
        $localCompanyKind = \OffbeatWP\Form\Fields\Select::make('company_kind', 'Soort bedrijf');

        $priceRange->addOptions(['$$$' => '$$$', '$$' => '$$', '$' => '$']);
        $form->addField($priceRange);

        $openingsdays = \OffbeatWP\Form\Fields\Select::make('opening_hours', 'Openingstijden');
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


        $time = [
            '7:00' => '7:00',
            '8:00' => '8:00',
            '9:00' => '9:00',
            '10:00' => '10:00',
            '11:00' => '11:00',
            '12:00' => '12:00',
            '13:00' => '13:00',
            '14:00' => '14:00',
            '15:00' => '15:00',
            '16:00' => '16:00',
            '17:00' => '17:00',
            '18:00' => '18:00',
            '19:00' => '19:00',
            '20:00' => '20:00',
            '21:00' => '21:00',
            '22:00' => '22:00',
            '23:00' => '23:00',
            '24:00' => '24:00',
            '1:00' => '1:00',
            '2:00' => '2:00',
            '3:00' => '3:00',
            '4:00' => '4:00',
            '5:00' => '5:00',
            '6:00' => '6:00',
        ];

        $closingTime = \OffbeatWP\Form\Fields\Select::make('closing_time', 'Sluitingstijd');
        $openingHours = \OffbeatWP\Form\Fields\Select::make('opening_time', 'Openingstijd');

        $closingTime->addOptions($time);

        $openingHours->addOptions($time);

        $form->addField($localCompanyKind);

        $form->addTab('contact-information', 'Contact gegevens');
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_fax', 'Faxnummer'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_phone', 'Telefoonnummer'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_street', 'Straat'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_number', 'Number'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_zip_code', 'Postcode'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_place', 'Plaats'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_province', 'Provincie'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_country', 'Land'));

        $form->addTab('opening-hours', 'Openingstijden');

        $form->addRepeater('opening-hours-selector',
            'Openingstijden')->addField($openingsdays)->addField($openingHours)->addField($closingTime);

        return $form;

    }
}
