<?php
/**
 * @copyright Ilch 2
 * @package ilch
 */

namespace Layouts\Shoplayout\Config;

class Config extends \Ilch\Config\Install
{
    public $config = [
        'name' => 'Shop-Layout',
        'version' => '1.0.1',
        'author' => 'Ilch.de',
        'link' => 'http://ilch.de',
        'desc' => '3 Spalten Clan Layout',
        'layouts' => [
            'index_full' => [
                ['module' => 'user', 'controller' => 'panel'],
                ['module' => 'forum'],
                ['module' => 'guestbook'],
            ],
            'start' => [
                ['module' => 'contact'],
            ]//only for example
        ],
        'settings' => [
            'pageSettings' => [
                'type' => 'separator',
            ],
            'logo' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/logo/ilchShop_logo.png',
                ],
            'topnavSettings' => [
                'type' => 'separator',
            ],
            'totopNavText' => [
                'type' => 'text',
                'default' => 'Exclusive Rabatte ! Dauer',
                'description' => '',
                ],
            'totopNavDatum' => [
                'type' => 'text',
                'default' => '17.10.2023',
                'description' => '',
                ],
            'totopNavMail' => [
                'type' => 'text',
                'default' => 'info@maxmustermann.de',
                'description' => '',
                ],
            'sliderSettings' => [
                'type' => 'separator',
            ],
            'sliderHeader' => [
                'type' => 'text',
                'default' => 'Ilch-Shop',
                'description' => '',
                ],
            'sliderHeaderSpan' => [
                'type' => 'text',
                'default' => 'Layout',
                'description' => 'span',
                ],
            'slider1' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'slider1text' => [
                'type' => 'text',
                'default' => 'Bei uns finden sie was das herz begehrt,
                zum Beispiel Shirts oder...',
                'description' => '',
                ],
            'slider1Img' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/pic/pic1.png',
                'description' => 'span',
                ],
            'slider2' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'slider2text' => [
                'type' => 'text',
                'default' => 'Tassen uvm. stöbern sie unseren shop und bei fragen kontaktieren sie uns.',
                'description' => '',
                ],
            'slider2Img' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/pic/pic2.png',
                'description' => 'span',
                ],
            'sliderText' => [
                'type' => 'text',
                'default' => 'Home of Legends and Heros',
                'description' => '',
                ],
            'block_1Settings' => [
                'type' => 'separator',
                ],
            'block_1Switch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'block_1img1' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/logo/ilchShop_logo.png',
                'description' => 'span',
                ],
            'block_1img2' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/logo/ilchShop_logo.png',
                'description' => 'span',
                ],
            'block_1img3' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/logo/ilchShop_logo.png',
                'description' => 'span',
                ],
            'block_1img4' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/logo/ilchShop_logo.png',
                'description' => 'span',
                ],
            'block_2Settings' => [
                'type' => 'separator',
                ],
            'block_2Switch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'block_2Header' => [
                'type' => 'text',
                'default' => 'Unsere',
                'description' => '',
                ],
            'block_2HeaderSpan' => [
                'type' => 'text',
                'default' => 'Produkte',
                'description' => 'span',
                ],
            'block_2list' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'block_2List1icon' => [
                'type' => 'text',
                'default' => 'fa fa-check',
                'description' => 'fa-icon',
                ],
            'block_2List1Text' => [
                'type' => 'text',
                'default' => 'Lorem Ipsum is simply dummy text of the printing ...',
                'description' => '',
                ],
            'block_2List2icon' => [
                'type' => 'text',
                'default' => 'fa fa-check',
                'description' => 'fa-icon',
                ],
            'block_2List2Text' => [
                'type' => 'text',
                'default' => 'Lorem Ipsum is simply dummy text of the printing ...',
                'description' => '',
                ],
            'block_2List3icon' => [
                'type' => 'text',
                'default' => 'fa fa-check',
                'description' => 'fa-icon',
                ],
            'block_2List3Text' => [
                'type' => 'text',
                'default' => 'Lorem Ipsum is simply dummy text of the printing ...',
                'description' => '',
                ],
            'block_2List4Switch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'block_2List4icon' => [
                'type' => 'text',
                'default' => 'fa fa-check',
                'description' => 'fa-icon',
                ],
            'block_2List4Text' => [
                'type' => 'text',
                'default' => 'Lorem Ipsum is simply dummy text of the printing ...',
                'description' => '',
                ],
            'block_2List5Switch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'block_2List5icon' => [
                'type' => 'text',
                'default' => 'fa fa-check',
                'description' => 'fa-icon',
                ],
            'block_2List5Text' => [
                'type' => 'text',
                'default' => 'Lorem Ipsum is simply dummy text of the printing ...',
                'description' => '',
                ],
            'block_2img' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/pic/pic3.png',
                'description' => 'span',
                ],
            'block_3Settings' => [
                'type' => 'separator',
                ],
            'block_3Switch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'block_3Header' => [
                'type' => 'text',
                'default' => 'Unsere',
                'description' => '',
                ],
            'block_3HeaderSpan' => [
                'type' => 'text',
                'default' => 'Service',
                'description' => 'span',
                ],
            'block_3List' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'block_3List1Header' => [
                'type' => 'text',
                'default' => 'Lorem Ipsum',
                'description' => '',
                ],
            'block_3List1icon' => [
                'type' => 'text',
                'default' => 'fa fa-paper-plane',
                'description' => 'fa-icon',
                ],
            'block_3List1Text' => [
                'type' => 'ckeditorhtml',
                'default' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s when an unknown printer took a galley of type und scrambled it to make a type specimen book',
                'description' => '',
                ],
            'block_3List2Header' => [
                'type' => 'text',
                'default' => 'Lorem Ipsum',
                'description' => '',
                ],
            'block_3List2icon' => [
                'type' => 'text',
                'default' => 'fa fa-paper-plane',
                'description' => 'fa-icon',
                ],
            'block_3List2Text' => [
                'type' => 'ckeditorhtml',
                'default' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s when an unknown printer took a galley of type und scrambled it to make a type specimen book',
                'description' => '',
                ],
            'block_3List3Header' => [
                'type' => 'text',
                'default' => 'Lorem Ipsum',
                'description' => '',
                ],
            'block_3List3icon' => [
                'type' => 'text',
                'default' => 'fa fa-paper-plane',
                'description' => 'fa-icon',
                ],
            'block_3List3Text' => [
                'type' => 'ckeditorhtml',
                'default' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s when an unknown printer took a galley of type und scrambled it to make a type specimen book',
                'description' => '',
                ],
            'block_3List4Header' => [
                'type' => 'text',
                'default' => 'Lorem Ipsum',
                'description' => '',
                ],
            'block_3List4icon' => [
                'type' => 'text',
                'default' => 'fa fa-paper-plane',
                'description' => 'fa-icon',
                ],
            'block_3List4Text' => [
                'type' => 'ckeditorhtml',
                'default' => 'Lorem Ipsum has been the industrys standard dummy text ever since the 1500s when an unknown printer took a galley of type und scrambled it to make a type specimen book',
                'description' => '',
                ],
            'block_4Settings' => [
                'type' => 'separator',
                ],
            'block_4Switch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'block_4Header' => [
                'type' => 'text',
                'default' => 'Unsere',
                'description' => '',
                ],
            'block_4HeaderSpan' => [
                'type' => 'text',
                'default' => 'Team',
                'description' => 'span',
                ],
            'block_4block' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'block_4block1img' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/pic/pic-4.jpg',
                'description' => 'span',
                ],
            'block_4block1Header' => [
                'type' => 'text',
                'default' => 'Max Mustermann',
                'description' => '',
                ],
            'block_4block1Text' => [
                'type' => 'ckeditorhtml',
                'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus vehicula placerat. Suspendisse sit amet condimentum urna. Phasellus suscipit, tortor.',
                'description' => '',
                ],
            'block_4block2img' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/pic/pic-5.jpg',
                'description' => 'span',
                ],
            'block_4block2Header' => [
                'type' => 'text',
                'default' => 'Max Mustermann',
                'description' => '',
                ],
            'block_4block2Text' => [
                'type' => 'ckeditorhtml',
                'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus vehicula placerat. Suspendisse sit amet condimentum urna. Phasellus suscipit, tortor.',
                'description' => '',
                ],
            'block_4block3img' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/pic/pic-6.jpg',
                'description' => 'span',
                ],
            'block_4block3Header' => [
                'type' => 'text',
                'default' => 'Max Mustermann',
                'description' => '',
                ],
            'block_4block3Text' => [
                'type' => 'ckeditorhtml',
                'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus vehicula placerat. Suspendisse sit amet condimentum urna. Phasellus suscipit, tortor.',
                'description' => '',
                ],
            'block_4block4img' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/pic/pic-7.jpg',
                'description' => 'span',
                ],
            'block_4block4Header' => [
                'type' => 'text',
                'default' => 'Max Mustermann',
                'description' => '',
                ],
            'block_4block4Text' => [
                'type' => 'ckeditorhtml',
                'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus vehicula placerat. Suspendisse sit amet condimentum urna. Phasellus suscipit, tortor.',
                'description' => '',
                ],
            'block_5Settings' => [
                'type' => 'separator',
                ],
            'block_5Switch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'block_5Header' => [
                'type' => 'text',
                'default' => 'Soziale',
                'description' => '',
                ],
            'block_5HeaderSpan' => [
                'type' => 'text',
                'default' => 'Kontakte',
                'description' => 'span',
                ],
            'block_5link' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'block_5link1Icon' => [
                'type' => 'text',
                'default' => 'fa fa-facebook',
                'description' => 'fa-icon',
                ],
            'block_5link1Link' => [
                'type' => 'text',
                'default' => 'https://www.facebook.com/',
                'description' => '',
                ],
            'block_5link2Icon' => [
                'type' => 'text',
                'default' => 'fa fa-twitter',
                'description' => 'fa-icon',
                ],
            'block_5link2Link' => [
                'type' => 'text',
                'default' => 'https://twitter.com/',
                'description' => '',
                ],
            'block_5link3Icon' => [
                'type' => 'text',
                'default' => 'fa fa-instagram',
                'description' => 'fa-icon',
                ],
            'block_5link3Link' => [
                'type' => 'text',
                'default' => 'https://www.instagram.com/',
                'description' => '',
                ],
            'block_6Settings' => [
                'type' => 'separator',
                ],
            'block_6Header' => [
                'type' => 'text',
                'default' => 'Kontaktiere',
                'description' => '',
                ],
            'block_6HeaderSpan' => [
                'type' => 'text',
                'default' => 'Uns',
                'description' => 'span',
                ],
            'block_6' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'block_6list1Icon' => [
                'type' => 'text',
                'default' => 'fa fa-map-marker',
                'description' => 'fa-icon',
                ],
            'block_6list1Header' => [
                'type' => 'text',
                'default' => 'Adresse:',
                'description' => 'fa-icon',
                ],
            'block_6list1Text' => [
                'type' => 'ckeditorhtml',
                'default' => '1234 Max, Maxmusterman Str.1',
                'description' => '',
                ],
            'block_6list2Icon' => [
                'type' => 'text',
                'default' => 'fa fa-phone',
                'description' => 'fa-icon',
                ],
            'block_6list2Header' => [
                'type' => 'text',
                'default' => 'Telefon Nummer:',
                'description' => '',
                ],
            'block_6list2Text' => [
                'type' => 'text',
                'default' => '+43 1/123456',
                'description' => '',
              ],
            'block_6list3Icon' => [
                'type' => 'text',
                'default' => 'fa fa-paper-plane',
                'description' => 'fa-icon',
                ],
            'block_6list3Header' => [
                'type' => 'text',
                'default' => 'Email:',
                'description' => '',
                ],
            'block_6list3Text' => [
                'type' => 'text',
                'default' => 'max@mustermann.at',
                'description' => '',
                ],
        ],
        //'modulekey' => 'Name of Module'
    ];

    public function getUpdate($installedVersion)
    {
    }
}
