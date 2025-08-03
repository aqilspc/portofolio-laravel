<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Gunakan Facade DB yang benar

class DataDummy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama agar tidak duplikat saat seeder dijalankan lagi
        DB::table('data')->truncate();

        $data = [
            'left' => [
                [
                    'label' => 'your_short_name',
                    'type' => 'text',
                    'text' => 'Aqil',
                ],
                [
                    'label' => 'self_description', // perbaikan typo dari 'self_desciption'
                    'type' => 'textarea',
                    'text' => 'Halo, perkenalkan! Saya Abdulloh Aqil, seorang DevOps Engineer yang percaya bahwa dunia server dan cloud tidak serumit yang dibayangkan. Passion saya adalah menjembatani antara kode dan infrastruktur, mengubah proses yang rumit menjadi otomatis dan efisien',
                ],
                [
                    'label' => 'link_fb',
                    'type' => 'text',
                    'text' => 'https://facebook.com/Ousider.pasuruan', // Sebaiknya sertakan https://
                ],
                [ // <<-- INI PERBAIKANNYA
                    'label' => 'link_ig',
                    'type' => 'text',
                    'text' => 'https://instagram.com/qil.abd', // Sebaiknya sertakan https://
                ],
                [
                    'label' => 'link_linkedin',
                    'type' => 'text',
                    'text' => 'https://linkedin.com/in/abdulloh-aqil', // Sebaiknya sertakan https://
                ],
                [
                    'label' => 'your_job',
                    'type' => 'text',
                    'text' => 'Project Manager | Backend Engineer | DevOps Engineer',
                ],
                [
                    'label' => 'where_are_you_from', // perbaikan dari 'where_are_you_come_from'
                    'type' => 'text',
                    'text' => 'Pasuruan, Indonesia', // Contoh isi yang lebih sesuai
                ],
            ],
            'center' => [
                // slide 1
                [
                    'label' => 'title_slide_1',
                    'type' => 'text',
                    'text' => 'DevOps',
                ],
                [
                    'label' => 'greeting_slide_1',
                    'type' => 'text',
                    'text' => 'Professional DevOps Engineer',
                ],
                [
                    'label' => 'headline_slide_1',
                    'type' => 'text',
                    'text' => 'DevOps Engineer',
                ],
                [
                    'label' => 'sub_headline_slide_1',
                    'type' => 'textarea',
                    'text' => 'Selamat datang. Nama saya Abdulloh Aqil, seorang praktisi dan antusias di bidang DevOps dan Cloud Engineering.',
                ],
                [
                    'label' => 'cta_title_slide_1',
                    'type' => 'text',
                    'text' => 'Let`s Talk',
                ],
                [
                    'label' => 'cta_link_slide_1',
                    'type' => 'text',
                    'text' => 'https://wa.me/6285608014111',
                ],
                [
                    'label' => 'image_url_slide_1',
                    'type' => 'file',
                    'text' => 'https://pg-p.ctme.caltech.edu/wp-content/uploads/sites/4/2023/11/What-is-DevOps.jpg',
                ],
                //slide 2
                [
                    'label' => 'title_slide_2',
                    'type' => 'text',
                    'text' => 'Backend',
                ],
                [
                    'label' => 'greeting_slide_2',
                    'type' => 'text',
                    'text' => 'Professional Backend Engineer',
                ],
                [
                    'label' => 'headline_slide_2',
                    'type' => 'text',
                    'text' => 'Backend Engineer',
                ],
                [
                    'label' => 'sub_headline_slide_2',
                    'type' => 'textarea',
                    'text' => 'Lupakan mitos bahwa kode backend itu rumit dan kaku. Di sini, kita akan merancang logika yang elegan dan membangun API yang andal.',
                ],
                [
                    'label' => 'cta_title_slide_2',
                    'type' => 'text',
                    'text' => 'Let`s Talk',
                ],
                [
                    'label' => 'cta_link_slide_2',
                    'type' => 'text',
                    'text' => 'https://wa.me/6285608014111',
                ],
                [
                    'label' => 'image_url_slide_2',
                    'type' => 'file',
                    'text' => 'https://i.pinimg.com/736x/c2/0a/66/c20a66ae4d597dea5b36ff327912a0f2.jpg',
                ],
                //slide 3
                [
                    'label' => 'title_slide_3',
                    'type' => 'text',
                    'text' => 'PM',
                ],
                [
                    'label' => 'greeting_slide_3',
                    'type' => 'text',
                    'text' => 'Professional Project Manager',
                ],
                [
                    'label' => 'headline_slide_3',
                    'type' => 'text',
                    'text' => 'Project Manager',
                ],
                [
                    'label' => 'sub_headline_slide_3',
                    'type' => 'textarea',
                    'text' => 'Lupakan mitos bahwa project management itu hanya soal deadline dan spreadsheet yang membosankan.',
                ],
                [
                    'label' => 'cta_title_slide_3',
                    'type' => 'text',
                    'text' => 'Let`s Talk',
                ],
                [
                    'label' => 'cta_link_slide_3',
                    'type' => 'text',
                    'text' => 'https://wa.me/6285608014111',
                ],
                [
                    'label' => 'image_url_slide_3',
                    'type' => 'file',
                    'text' => 'https://i.pinimg.com/736x/c2/0a/66/c20a66ae4d597dea5b36ff327912a0f2.jpg',
                ],
                //slide 4
                [
                    'label' => 'title_slide_4',
                    'type' => 'text',
                    'text' => 'Learn',
                ],
                [
                    'label' => 'greeting_slide_4',
                    'type' => 'text',
                    'text' => 'Belajar Bersama',
                ],
                [
                    'label' => 'headline_slide_4',
                    'type' => 'text',
                    'text' => 'Mari Belajar Bersama',
                ],
                [
                    'label' => 'sub_headline_slide_4',
                    'type' => 'textarea',
                    'text' => 'Sudah saatnya kita belajar melampaui peran kita masing-masing.',
                ],
                [
                    'label' => 'cta_title_slide_4',
                    'type' => 'text',
                    'text' => 'Let`s Learn',
                ],
                [
                    'label' => 'cta_link_slide_4',
                    'type' => 'text',
                    'text' => 'https://wa.me/6285608014111',
                ],
                [
                    'label' => 'image_url_slide_4',
                    'type' => 'file',
                    'text' => 'https://www.learndash.com/wp-content/uploads/learn-written-on-blocks.jpg',
                ],
            ],
            'right' => [
                [
                    'label' => 'job_title_1',
                    'type' => 'text',
                    'text' => 'DevOps Engineer',
                ],
                [
                    'label' => 'job_description_1', // <<-- PERBAIKAN LABEL
                    'type' => 'textarea',
                    'text' => 'Kendali sumber daya server ada ditangan anda, jadi berhati hatilah dan efisien sumber daya.',
                ],
                [
                    'label' => 'job_title_2', // <<-- PERBAIKAN LABEL
                    'type' => 'text',
                    'text' => 'Backend Engineer',
                ],
                [
                    'label' => 'job_description_2', // <<-- PERBAIKAN LABEL
                    'type' => 'textarea',
                    'text' => 'Sistem yang anda bangun secara fungsionalitas akan di gunakan banyak user, keberlangsungan sistem ada di tangan anda!',
                ],
                [
                    'label' => 'job_title_3', // <<-- PERBAIKAN LABEL
                    'type' => 'text',
                    'text' => 'Project Manager',
                ],
                [
                    'label' => 'job_description_3', // <<-- PERBAIKAN LABEL
                    'type' => 'textarea',
                    'text' => 'Project tanpa Project Manager adalah kapal tanpa nahkoda, jadi semua yang anda rencanakan untuk project akan menentukan keberhasilan project!',
                ],
                [
                    'label' => 'contact_text',
                    'type' => 'text',
                    'text' => 'Hubungi Saya !',
                ],
                [
                    'label' => 'contact_url',
                    'type' => 'text',
                    'text' => 'https://wa.me/6285608014111',
                ],
            ]
        ];

        foreach ($data as $section => $items) {
            echo "Memasukkan data untuk section: $section\n";
            foreach ($items as $item) {
                DB::table('data')->insert([
                    'section' => $section,
                    'label' => $item['label'],
                    'type' => $item['type'],
                    'text' => $item['text'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        echo "Seeding data dummy selesai.\n";
    }
}