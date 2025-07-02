<?php

namespace Database\Seeders;

use App\Models\ZIndustry;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZIndustriesSeeder extends Seeder
{
    public function run(): void
    {
        ZIndustry::insert([
            ['industry_id' => 1, 'cloud_id' => 0, 'industry_name' => 'Oil and Gas/Energy/Power/Infrastructure', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 2, 'cloud_id' => 0, 'industry_name' => 'Telecom/ISP', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 3, 'cloud_id' => 0, 'industry_name' => 'Recruitment/Staffing', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 4, 'cloud_id' => 0, 'industry_name' => 'FMCG/Foods/Beverage', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 5, 'cloud_id' => 0, 'industry_name' => 'Iron and Steel', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 6, 'cloud_id' => 0, 'industry_name' => 'Accounting/Finance', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 7, 'cloud_id' => 0, 'industry_name' => 'Advertising/PR/MR/Event Management', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 8, 'cloud_id' => 0, 'industry_name' => 'Agriculture/Dairy', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 9, 'cloud_id' => 0, 'industry_name' => 'Animation/Gaming', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 10, 'cloud_id' => 0, 'industry_name' => 'Architecture/Interior Design', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 11, 'cloud_id' => 0, 'industry_name' => 'Automobile/Auto Anciliary/Auto Components', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 12, 'cloud_id' => 0, 'industry_name' => 'Aviation/Aerospace Firms', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 13, 'cloud_id' => 0, 'industry_name' => 'Banking/Financial Services/Broking', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 14, 'cloud_id' => 0, 'industry_name' => 'BPO/Call Centre/ITES', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 15, 'cloud_id' => 0, 'industry_name' => 'Brewery/Distillery', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 16, 'cloud_id' => 0, 'industry_name' => 'Broadcasting', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 17, 'cloud_id' => 0, 'industry_name' => 'Ceramics/Sanitary ware', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 18, 'cloud_id' => 0, 'industry_name' => 'Chemicals/PetroChemical/Plastic/Rubber', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 19, 'cloud_id' => 0, 'industry_name' => 'Construction/Engineering/Cement/Metals', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 20, 'cloud_id' => 0, 'industry_name' => 'Consumer Electronics/Appliances/Durables', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 21, 'cloud_id' => 0, 'industry_name' => 'Courier/Transportation/Freight/Warehousing', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 22, 'cloud_id' => 0, 'industry_name' => 'Education/Teaching/Training', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 23, 'cloud_id' => 0, 'industry_name' => 'Electricals/Switchgears', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 24, 'cloud_id' => 0, 'industry_name' => 'Export/Import', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 25, 'cloud_id' => 0, 'industry_name' => 'Facility Management', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 26, 'cloud_id' => 0, 'industry_name' => 'Fertilizers/Pesticides', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 27, 'cloud_id' => 0, 'industry_name' => 'Food Processing', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 28, 'cloud_id' => 0, 'industry_name' => 'Fresher/Trainee/Entry Level', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 29, 'cloud_id' => 0, 'industry_name' => 'Gems/Jewellery', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 30, 'cloud_id' => 0, 'industry_name' => 'Glass/Glassware', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 31, 'cloud_id' => 0, 'industry_name' => 'Government/Defence', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 32, 'cloud_id' => 0, 'industry_name' => 'Heat Ventilation/Air Conditioning', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 33, 'cloud_id' => 0, 'industry_name' => 'Industrial Products/Heavy Machinery', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 34, 'cloud_id' => 0, 'industry_name' => 'Insurance', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 35, 'cloud_id' => 0, 'industry_name' => 'IT-Hardware & Networking', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 36, 'cloud_id' => 0, 'industry_name' => 'IT-Software/Software Services', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 37, 'cloud_id' => 0, 'industry_name' => 'KPO/Research/Analytics', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 38, 'cloud_id' => 0, 'industry_name' => 'Legal', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 39, 'cloud_id' => 0, 'industry_name' => 'Media/Entertainment/Internet', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 40, 'cloud_id' => 0, 'industry_name' => 'Internet/Ecommerce', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 41, 'cloud_id' => 0, 'industry_name' => 'Leather', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 42, 'cloud_id' => 0, 'industry_name' => 'Medical/Healthcare/Hospitals', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 43, 'cloud_id' => 0, 'industry_name' => 'Mining/Quarrying', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 44, 'cloud_id' => 0, 'industry_name' => 'NGO/Social Services/Regulators/Industry', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 45, 'cloud_id' => 0, 'industry_name' => 'Office Equipment/Automation', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 46, 'cloud_id' => 0, 'industry_name' => 'Pulp and Paper', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 47, 'cloud_id' => 0, 'industry_name' => 'Pharma/Biotech/Clinical Research', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 48, 'cloud_id' => 0, 'industry_name' => 'Printing/Packaging', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 49, 'cloud_id' => 0, 'industry_name' => 'Publishing', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 50, 'cloud_id' => 0, 'industry_name' => 'Real Estate/Property', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 51, 'cloud_id' => 0, 'industry_name' => 'Retail/Wholesale', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 52, 'cloud_id' => 0, 'industry_name' => 'Security/Law Enforcement', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 53, 'cloud_id' => 0, 'industry_name' => 'Semiconductors/Electronics', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 54, 'cloud_id' => 0, 'industry_name' => 'Shipping/Marine', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 55, 'cloud_id' => 0, 'industry_name' => 'Strategy/Management Consulting Firms', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 56, 'cloud_id' => 0, 'industry_name' => 'Sugar', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 57, 'cloud_id' => 0, 'industry_name' => 'Textiles/Garments/Accessories', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 58, 'cloud_id' => 0, 'industry_name' => 'Travel/Hotels/Restaurants/Airlines/Railways', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 59, 'cloud_id' => 0, 'industry_name' => 'Tyres', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 60, 'cloud_id' => 0, 'industry_name' => 'Water Treatment/Waste Management', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],

            ['industry_id' => 61, 'cloud_id' => 0, 'industry_name' => 'Wellness/Fitness/Sports', 'is_visible' => 'Yes', 'is_hidden' => 0, 'source' => 'Global'],
            ['industry_id' => 78, 'cloud_id' => 1, 'industry_name' => 'Wellness/Fitness/Sports1', 'is_visible' => 'Yes', 'is_hidden' => 61, 'source' => 'Global Edit'],
            ['industry_id' => 79, 'cloud_id' => 1, 'industry_name' => 'NA', 'is_visible' => 'No', 'is_hidden' => 60, 'source' => 'NA']
        ]);
    }
}
