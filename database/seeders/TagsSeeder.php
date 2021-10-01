<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoriesList = [
            'Academic',
            'Admissions',
            'Alumni',
            'Alumni Voices',
            'Basic Science Departments',
            'Bass Connections',
            'Behavioral Science & Policy Center',
            'Biochemistry',
            'Biomedical Engineering',
            'Biostatistics & Bioinformatics',
            'Campus',
            'Cell Biology',
            'Center for Advanced Hindsight',
            'Center for Canadian Studies',
            'Center for Child and Family Policy',
            'Center for Cognitive Neuroscience',
            'Center for Documentary Studies',
            'Center for European Studies',
            'Center for Health Policy & Inequalities Research',
            'Center for Health Policy and Inequalities Research',
            'Center for Population Health & Aging',
            'Center for South Asian Studies',
            'Center for Strategic Philanthropy and Civil Society',
            'Center for the Study of Aging and Human Development',
            'Center for the Study of Philanthropy and Voluntarism',
            'Center on Globalization, Governance & Competitiveness',
            'Child & Family Policy',
            'Civil and Environmental Engineering',
            'Clinical Science Departments',
            'Community and Family Medicine',
            'Community and Family Medicine, Community Health',
            'Community and Family Medicine, Diet & Fitness Center',
            'Community and Family Medicine, Family Medicine',
            'Community and Family Medicine, Occupational & Environmental Medicine',
            'Community and Family Medicine, Physician Assistant Program',
            'Community and Family Medicine, Prevention Research',
            'Consortium for Latin American and Carribean Studies',
            'Continuing Studies',
            'Demographic Studies',
            'Dermatology',
            'DeWitt Wallace Center for Media and Democracy',
            'Divinity School',
            'Duke Cancer Institute',
            'Duke Center for Applied Genomics and Precision Medicine',
            'Duke Center for Genomics and Computational Biology',
            'Duke Center for Human Genome Variation',
            'Duke Center for International Development',
            'Duke Clinical Research Institute',
            'Duke Global Health Institute',
            'Duke Human Vaccine Institute',
            'Duke Institute for Brain Sciences',
            'Duke Institute for Genome Sciences & Policy',
            'Duke Molecular Physiology Institute',
            'Duke Network Analysis Center',
            'Duke Police',
            'Duke Population Research Center',
            'Duke Population Research Institute',
            'Duke Science & Society',
            'Duke Translational Medicine Institute',
            'Duke University Center for International Studies',
            'Duke University Libraries',
            'Duke University Middle East Studies Center Duke-Margolis Center for Health Policy',
            'Duke-UNC Center for Brain Imaging and Analysis',
            'Duke-UNC Rotary Center for International Studies in Peace and Conflict',
            'Earth and Ocean Sciences',
            'Education Program',
            'Electrical and Computer Engineering',
            'Energy',
            'Marine Science and Conservation',
            'Master\'s in Teaching Program',
            'Masters of Fine Arts in Experimental and Documentary Arts',
            'Mechanical Engineering and Materials Science',
            'Medical Center Library & Archives',
            'Medical Education',
            'Medicine',
            'Medicine, Cardiology',
            'Medicine, Cellular Therapy',
            'Medicine, Clinical Pharmacology',
            'Medicine, Duke Human Vaccine Institute',
            'Medicine, Endocrinology, Metabolism, and Nutrition',
            'Medicine, Gastroenterology',
            'Medicine, General Internal Medicine',
            'Medicine, Geriatrics',
            'Medicine, Hematological Malignancies',
            'Medicine, Hematology',
            'Medicine, Infectious Diseases',
            'Medicine, Medical Genetics',
            'Medicine, Medical Oncology',
            'Medicine, Nephrology',
            'Medicine, Pulmonary, Allergy, and Critical Care Medicine',
            'Medicine, Rheumatology and Immunology',
            'Medieval and Renaissance Studies',
            'Molecular Genetics and Microbiology',
            'Neurobiology',
            'Neurology',
            'Neurology, Behavioral Neurology',
            'Neurology, Epilepsy and Sleep',
            'Neurology, General & Community Neurology',
            'Neurology, Headache and Pain',
            'Neurology, Movement Disorders',
            'Neurology, MS & Neuroimmunology',
            'Neurology, Neurocritical Care',
            'Neurology, Neuromuscular Disease',
            'Neurology, Stroke and Vascular Neurology',
            'Neurosurgery',
            'Neurosurgery, Neuro-Oncology News Clips',
            'Nicholas Institute for Environmental Policy Solutions',
            'Nicholas School of the Environment',
            'Nursing',
        ];

        $insert = [];

        foreach ($categoriesList as $categoryName) {
            Tag::create([
                'name' => $categoryName
            ]);
            //$insert[] = [
            //    'name' => $categoryName,
            //];
        }

        //Tag::create($insert);
    }
}
