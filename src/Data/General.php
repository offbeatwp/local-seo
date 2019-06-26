<?php

namespace OffbeatWP\LocalSeo\Data;

use Money\Currencies\ISOCurrencies;

class General
{

    public static function companyKind()
    {

        $companyKind = [
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
        ];

        return $companyKind;

    }

    public static function priceRange()
    {

        $priceRange = ['$$$' => '$$$', '$$' => '$$', '$' => '$'];

        return $priceRange;
    }

    public static function currency()
    {

        $isoCurrencies = new ISOCurrencies();

        foreach ($isoCurrencies as $currency) {
            $returnCurrency[$currency->getCode()] = $currency->getCode();
        }

        return $returnCurrency;
    }

}
