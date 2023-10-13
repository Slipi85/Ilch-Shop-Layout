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
        'desc' => 'Das Shop-Layout wurde als Layout für das Modul "Kontakt" erstellr, es könnten trotzdem alle module ausgegeben werden. Die Startseite wird mit dem Modul Shop ausgegeben.Im Admincenter können sie einzellne Blöcke bearbeiten und aktivieren/deaktivieren.
         Die Anordnung der Blöcke ist über das Admincenter nicht möglich, dies müßte in der application/layouts/shoplayout/start.php manuell durcgeführt werden in dem die Ordnung der include blöcke verschoben wird.',
        'layouts' => [
            'index_full' => [
                ['module' => 'user', 'controller' => 'panel'],
                ['module' => 'forum'],
                ['module' => 'guestbook'],
            ],
            'start' => [
                ['module' => 'contact'],
            ],
            'shop_index' => [
                ['module' => 'shop'],
            ]//only for example
        ],
        'settings' => [
            'pageSettings' => [
                'type' => 'separator',
            ],
            'pageHeaderSpan' => [
              'type' => 'bscolorpicker',
              'default' => '#c70f22',
              'description' => '',
            ],
            'logo' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/logo/ilchShop_logo.png',
                ],
            'topnavSettings' => [
                'type' => 'separator',
            ],
            'totopNavAction' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'totopNavBg' => [
              'type' => 'bscolorpicker',
              'default' => '#212529',
              'description' => '',
            ],
            'totopNavColor' => [
              'type' => 'bscolorpicker',
              'default' => '#ffffff',
              'description' => '',
            ],
            'totopNavActionText' => [
              'type' => 'bscolorpicker',
              'default' => '#c70f22',
              'description' => '',
            ],
            'totopNavText' => [
                'type' => 'text',
                'default' => 'Exclusive Rabatte ! Dauer',
                'description' => '',
                ],
            'totopNavActionOff' => [
                'type' => 'text',
                'default' => 'Zurzeit gibt es keine Exclusive Tage',
                'description' => 'actionOff',
                ],
            'totopNavDatum' => [
                'type' => 'text',
                'default' => '17.10.2023',
                'description' => 'date',
                ],
            'totopNavMail' => [
                'type' => 'text',
                'default' => 'info@maxmustermann.de',
                'description' => '',
                ],
            'sliderSettings' => [
                'type' => 'separator',
            ],
            'slider-Header' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'sliderBg' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/bg/slider_background.jpg',
                'description' => '',
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
                'type' => 'ckeditorhtml',
                'default' => 'Bei uns finden sie was das herz begehrt, zum Beispiel Shirts oder...',
                'description' => '',
                ],
            'slider1Img' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/pic/pic1.png',
                'description' => 'sliderimg',
                ],
            'slider2' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'slider2text' => [
                'type' => 'ckeditorhtml',
                'default' => 'Tassen uvm. stöbern sie unseren shop und bei fragen kontaktieren sie uns.',
                'description' => '',
                ],
            'slider2Img' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/pic/pic2.png',
                'description' => 'sliderimg',
                ],
            'block_1Settings' => [
                'type' => 'separator',
                ],
            'block_1Switch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'block_1Bg' => [
              'type' => 'bscolorpicker',
              'default' => '#c70f22',
              'description' => '',
            ],
            'block_1img1' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/logo/ilchShop_logo.png',
                'description' => 'block1img',
                ],
            'block_1img2' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/logo/ilchShop_logo.png',
                'description' => 'block1img',
                ],
            'block_1img3' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/logo/ilchShop_logo.png',
                'description' => 'block1img',
                ],
            'block_1img4' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/logo/ilchShop_logo.png',
                'description' => 'block1img',
                ],
            'block_2Settings' => [
                'type' => 'separator',
                ],
            'block_2Switch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'block_2Bg' => [
              'type' => 'bscolorpicker',
              'default' => '#f8f9fa',
              'description' => '',
            ],
            'block_2IconColor' => [
              'type' => 'bscolorpicker',
              'default' => '#c70f22',
              'description' => '',
            ],
            'block_2-Header' => [
                'type' => '',
                'default' => '',
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
            'block_2img' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/pic/pic3.png',
                'description' => 'block2img',
                ],
            'block_2ListBg' => [
              'type' => 'bscolorpicker',
              'default' => '#f8f9fa',
              'description' => '',
            ],
            'block_2List1icon' => [
                'type' => 'text',
                'default' => 'fa fa-check',
                'description' => 'fa-icon',
                ],
            'block_2list1' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'block_2List1Text' => [
                'type' => 'ckeditorhtml',
                'default' => 'Lorem Ipsum is simply dummy text of the printing ...',
                'description' => '',
                ],
            'block_2list2' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'block_2List2icon' => [
                'type' => 'text',
                'default' => 'fa fa-check',
                'description' => 'fa-icon',
                ],
            'block_2List2Text' => [
                'type' => 'ckeditorhtml',
                'default' => 'Lorem Ipsum is simply dummy text of the printing ...',
                'description' => '',
                ],
            'block_2list3' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'block_2List3icon' => [
                'type' => 'text',
                'default' => 'fa fa-check',
                'description' => 'fa-icon',
                ],
            'block_2List3Text' => [
                'type' => 'ckeditorhtml',
                'default' => 'Lorem Ipsum is simply dummy text of the printing ...',
                'description' => '',
                ],
            'block_2list4' => [
                'type' => '',
                'default' => '',
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
                'type' => 'ckeditorhtml',
                'default' => 'Lorem Ipsum is simply dummy text of the printing ...',
                'description' => '',
                ],
            'block_2list5' => [
                'type' => '',
                'default' => '',
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
                'type' => 'ckeditorhtml',
                'default' => 'Lorem Ipsum is simply dummy text of the printing ...',
                'description' => '',
                ],
            'block_3Settings' => [
                'type' => 'separator',
                ],
            'block_3Switch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'block_3Bg' => [
              'type' => 'bscolorpicker',
              'default' => '#f8f9fa',
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
            'block_3ListBg' => [
              'type' => 'bscolorpicker',
              'default' => '#ffffff',
              'description' => '',
            ],
            'block_3ListColor' => [
              'type' => 'bscolorpicker',
              'default' => '#212529',
              'description' => '',
            ],
            'block_3List1' => [
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
            'block_3List2' => [
                'type' => '',
                'default' => '',
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
            'block_3List3' => [
                'type' => '',
                'default' => '',
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
            'block_3List4' => [
                'type' => '',
                'default' => '',
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
            'block_4Bg' => [
              'type' => 'bscolorpicker',
              'default' => '#f8f9fa',
              'description' => '',
            ],
            'block_4-Header' => [
                'type' => '',
                'default' => '',
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
            'block_4BlockBg' => [
              'type' => 'bscolorpicker',
              'default' => '#ffffff',
              'description' => '',
            ],
            'block_4TextColor' => [
              'type' => 'bscolorpicker',
              'default' => '#212529',
              'description' => '',
            ],
            'block_4block1' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'block_4block1img' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/pic/pic-4.jpg',
                'description' => 'block4img',
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
            'block_4block2' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'block_4block2img' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/pic/pic-5.jpg',
                'description' => 'block4img',
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
            'block_4block3' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'block_4block3Switch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'block_4block3img' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/pic/pic-6.jpg',
                'description' => 'block4img',
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
            'block_4block4' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'block_4block4Switch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'block_4block4img' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/pic/pic-7.jpg',
                'description' => 'block4img',
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
            'block_5Bg' => [
              'type' => 'mediaselection',
              'default' => 'application/layouts/shoplayout/img/bg/info_background.jpg',
              'description' => '',
            ],
            'block_5IconColor' => [
              'type' => 'bscolorpicker',
              'default' => '#c70f22',
              'description' => '',
            ],
            'block_5-Header' => [
                'type' => '',
                'default' => '',
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
            'block_5link1' => [
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
            'block_5link2' => [
                'type' => '',
                'default' => '',
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
            'block_5link3' => [
                'type' => '',
                'default' => '',
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
            'block_6Bg' => [
              'type' => 'bscolorpicker',
              'default' => '#f8f9fa',
              'description' => '',
            ],
            'block_6TextColor' => [
              'type' => 'bscolorpicker',
              'default' => '#212529',
              'description' => '',
            ],
            'block_6IconColor' => [
              'type' => 'bscolorpicker',
              'default' => '#c70f22',
              'description' => '',
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
            'block_6list1' => [
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
                'description' => '',
                ],
            'block_6list1Text' => [
                'type' => 'ckeditorhtml',
                'default' => '1234 Max, Maxmusterman Str.1',
                'description' => '',
                ],
            'block_6list2' => [
                'type' => '',
                'default' => '',
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
            'block_6list3' => [
                'type' => '',
                'default' => '',
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
            'block_7Settings' => [
                'type' => 'separator',
            ],
            'block_7Switch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'block_7Bg' => [
              'type' => 'bscolorpicker',
              'default' => '#f8f9fa',
              'description' => '',
            ],
            'block_7BlockBg' => [
              'type' => 'bscolorpicker',
              'default' => '#ffffff',
              'description' => '',
            ],
            'block_7TextColor' => [
              'type' => 'bscolorpicker',
              'default' => '#212529',
              'description' => '',
            ],
            'block_7block1' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'block_7block1img' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/pic/muster_capblack1.jpg',
                'description' => 'block7img',
                ],
            'block_7block1header' => [
                'type' => 'text',
                'default' => 'Cap Schwarz',
                'description' => '',
                ],
            'block_7block1price' => [
                'type' => 'text',
                'default' => '€ 19',
                'description' => '',
                ],
            'block_7block1cordonSwitch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => 'cordon',
                ],
            'block_7block1Cordon' => [
                'type' => 'text',
                'default' => 'Verfügbarkeit',
                'description' => '',
                ],
            'block_7block1cordonBg' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => 'cordonbg',
                ],
            'block_7block2' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'block_7block2img' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/pic/muster_capblack1.jpg',
                'description' => 'block7img',
                ],
            'block_7block2header' => [
                'type' => 'text',
                'default' => 'Cap Schwarz',
                'description' => '',
                ],
            'block_7block2price' => [
                'type' => 'text',
                'default' => '€ 25',
                'description' => '',
                ],
            'block_7block2cordonSwitch' => [
                'type' => 'flipswitch',
                'default' => '0',
                'description' => 'cordon',
                ],
            'block_7block2Cordon' => [
                'type' => 'text',
                'default' => '',
                'description' => '',
                ],
            'block_7block2cordonBg' => [
                'type' => 'flipswitch',
                'default' => '0',
                'description' => 'cordonbg',
                ],
            'block_7block3' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'block_7block3img' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/pic/muster_capblack1.jpg',
                'description' => 'block7img',
                ],
            'block_7block3header' => [
                'type' => 'text',
                'default' => 'Cap Schwarz',
                'description' => '',
                ],
            'block_7block3price' => [
                'type' => 'text',
                'default' => '€ 20',
                'description' => '',
                ],
            'block_7block3cordonSwitch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => 'cordon',
                ],
            'block_7block3Cordon' => [
                'type' => 'text',
                'default' => 'Bestseller',
                'description' => '',
                ],
            'block_7block3cordonBg' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => 'cordonbg',
                ],
            'block_7block4' => [
                'type' => '',
                'default' => '',
                'description' => '',
                ],
            'block_7block4img' => [
                'type' => 'mediaselection',
                'default' => 'application/layouts/shoplayout/img/pic/muster_capblack1.jpg',
                'description' => 'block7img',
                ],
            'block_7block4header' => [
                'type' => 'text',
                'default' => 'Cap Schwarz',
                'description' => '',
                ],
            'block_7block4price' => [
                'type' => 'text',
                'default' => '€ 19',
                'description' => '',
                ],
            'block_7block4cordonSwitch' => [
                'type' => 'flipswitch',
                'default' => '0',
                'description' => 'cordon',
                ],
            'block_7block4Cordon' => [
                'type' => 'text',
                'default' => '',
                'description' => '',
                ],
            'block_7block4cordonBg' => [
                'type' => 'flipswitch',
                'default' => '0',
                'description' => 'cordonbg',
                ],
            'block_8Settings' => [
                'type' => 'separator',
            ],
            'block_8Switch' => [
                'type' => 'flipswitch',
                'default' => '1',
                'description' => '',
                ],
            'block_8Bg' => [
              'type' => 'bscolorpicker',
              'default' => '#ffffff',
              'description' => '',
            ],
            'block_8TextColor' => [
              'type' => 'bscolorpicker',
              'default' => '#212529',
              'description' => '',
            ],
            'block_8text' => [
                'type' => 'text',
                'default' => 'Abonniere unseren Newsletter',
                'description' => '',
                ],
        ],
        //'modulekey' => 'Name of Module'
    ];

    public function getUpdate($installedVersion)
    {
    }
}
