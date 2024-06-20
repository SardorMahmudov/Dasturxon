<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandingPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $features = [
            ['title'=>'{"en":"Create your menu"}', 'description'=>'{"en":"Create your menu directly on our platform. Update anytime. Easy And Simple."}', 'image'=>asset('social').'/img/SVG/512/menu.svg'],
            ['title'=>'{"en":"Ordering via chat"}', 'description'=>'{"en":"You will receive the order on your WhatsApp. Continue the chat and finalize order"}', 'image'=>asset('social').'/img/SVG/512/chat.svg'],
            ['title'=>'{"en":"Payment methods"}', 'description'=>'{"en":"Accept Cash on Deliver or get paid directly via payment link. 20+ payment methods available."}', 'image'=>asset('social').'/img/SVG/512/money.svg'],
            ['title'=>'{"en":"Jump start to ordering"}', 'description'=>'{"en":"Just create your menu, and next thing you know, is receiving orders on your phone via WhatsApp."}', 'image'=>asset('social').'/img/SVG/512/ordering.svg'],
            ['title'=>'{"en":"Views & orders analytics"}', 'description'=>'{"en":"Get detailed report about your orders and earning. Track your business as it grows with us.."}', 'image'=>asset('social').'/img/SVG/512/analytics.svg'],
            ['title'=>'{"en":"Know your customers"}', 'description'=>'{"en":"You are creating a direct bound with your customers. Loyal customer, will know where to find you next time. "}', 'image'=>asset('social').'/img/SVG/512/customers.svg'],
        ];
        if(config('settings.is_pos_cloud_mode')){
            $features = [
                ['title'=>'{"en":"Jump start to ordering"}', 'description'=>'{"en":"Starting up has never been easier. Create or import your menu and start in no time."}', 'image'=>asset('soft').'/img/SVG/512/ordering.svg'],
                ['title'=>'{"en":"Floor plan"}', 'description'=>'{"en":"Organize your workspace into multiple areas. Create real-life mockup of your restaurant for more intuitive ordering process and capacity overview."}', 'image'=>asset('soft').'/img/SVG/512/design.svg'],

                ['title'=>'{"en":"Dine In + TakeAway + Deliver"}', 'description'=>'{"en":"All in one solution that just works. Amazing management  of your active and todo orders."}', 'image'=>asset('soft').'/img/SVG/512/marker.svg'],
                ['title'=>'{"en":"PWA - Mobile ready"}', 'description'=>'{"en":"It works every where. On PC, Tablet, phone. Big or small screen. Make orders on the go."}', 'image'=>asset('soft').'/img/SVG/512/menu.svg'],
                
                ['title'=>'{"en":"Most Advance menu builder"}', 'description'=>'{"en":"Yes, that is correct. We have the most amazing and complete menu creator. Give it a try and see for your self. "}', 'image'=>asset('soft').'/img/SVG/512/folder.svg'],
                ['title'=>'{"en":"Multi employee/station ready"}', 'description'=>'{"en":"Run it on one or more devices. For one or more employees. Synchronization is done in seconds."}', 'image'=>asset('soft').'/img/SVG/512/customers.svg'],

                ['title'=>'{"en":"Expenses and Income - Profit"}', 'description'=>'{"en":"Track your expenses, organized by vendor and categories. Then compare with the income made and see your business performance."}', 'image'=>asset('soft').'/img/SVG/512/analytics.svg'],
                ['title'=>'{"en":"Delivery cost implementation "}', 'description'=>'{"en":"Delivery is not simple. We know that. But with our solution you have a tool to calculate the delivery frees based on different delivery areas. "}', 'image'=>asset('soft').'/img/SVG/512/money.svg'],

                ['title'=>'{"en":"Move order form table"}', 'description'=>'{"en":"Jumping from table to table. Yes it happens. No worries. You are covered. Move a complete order from table to table. "}', 'image'=>asset('soft').'/img/SVG/512/rocket.svg'],
                ['title'=>'{"en":"Multi language"}', 'description'=>'{"en":"You do not have to install any expensive hardware.  We live in cloud, secured area. Yet, we act like local. "}', 'image'=>asset('soft').'/img/SVG/512/baloon.svg'],
            ]; 
        }

        $testimonials = [
            ['title'=>'{"en":"Gabriel Martin"}', 'subtitle'=>'{"en":"Bistrot Paul Bert, France"}', 'description'=>'{"en":"We knew that we need tool like this one. And we finally found it. Managing orders faster than ever."}', 'image'=>asset('social').'/img/faces/christian.jpg'],
            ['title'=>'{"en":"Emma Müller "}', 'subtitle'=>'{"en":"Amador, Germany"}', 'description'=>'{"en":"No more 30% fee on food delivery platforms. This is super cheap platforms thant saved us ton of money.  "}', 'image'=>asset('social').'/img/faces/team-4.jpg'], 
            ['title'=>'{"en":"John Smith"}', 'subtitle'=>'{"en":"Brooklyn Taco, USA"}', 'description'=>'{"en":"We where previously chatting with customers on whatsapp so they can order. This is next level."}', 'image'=>asset('social').'/img/faces/michael.jpg'],
            ['title'=>'{"en":"Maxim Ivanov"}', 'subtitle'=>'{"en":"Babushka, Russia"}', 'description'=>'{"en":"Being able to pay directly in WhatsApp, is so great. And the best of all, money goes directly to us."}', 'image'=>asset('social').'/img/faces/team-1.jpg'],
            ['title'=>'{"en":"Alexandra Papadopulos"}', 'subtitle'=>'{"en":"Odyssey, Greece"}', 'description'=>'{"en":"They have the best digital menu creator. Together with the QR code generator it is best on market"}', 'image'=>asset('social').'/img/faces/team-3.jpg'],
            ['title'=>'{"en":"Maria Santos"}', 'subtitle'=>'{"en":"Brasa, Brazil"}', 'description'=>'{"en":"Orders from customers on Facebook, Instagram and web on Whatsapp. Can I ask for more!"}', 'image'=>asset('social').'/img/faces/team-2.jpg'],
        ];

        $processes = [
            ['title'=>'{"en":"For Customers ordering"}', 'description'=>'{"en":"The customer can find the link to the menu of the restaurant on Social platforms, word of mouth via friend or if they scan the QR. After they make their order with the online menu, they are able to send the order directly to Restaurant\'s WhatsApp."}','link_name'=>'Start now', 'link'=>''],
            ['title'=>'{"en":"For Restaurant owners"}', 'description'=>'{"en":"The process starts when they hear a new message sound on their WhatsApp. They, or a trained bot can ask questions for details for order and delivery address. The restaurant can also inform how much time will take to deliver the order."}','link_name'=>'Start now', 'link'=>''],
        ];

        if(config('settings.is_pos_cloud_mode')){
            $processes = [
                ['image'=>asset('soft').'/img/process1_2x.png' ,'title'=>'{"en":"Everything a"}','subtitle'=>'{"en":"restaurant needs"}', 'description'=>'{"en":"Lion POS is based on smart interface that any restaurant or bar can use it without difficulty.  Because is so flexible you can configure Lion POS to meet your precise needs."}','link_name'=>'Start now', 'link'=>''],
                ['image'=>asset('soft').'/img/process2_2x.png','title'=>'{"en":"So simple"}','subtitle'=>'{"en":"yet so POWERFUL"}', 'description'=>'{"en":"Making orders has never been easier.  Packed up with functions for Dine In - Pickup up and Delivery, this is all in one solution for the needs of today restaurants and bars."}','link_name'=>'Start now', 'link'=>''],
            ];
        }

        //https://www.apple.com/v/imac-24/b/images/overview/facetime_hw__ckl65spxnbqu_large_2x.png

        foreach ($features as $key => $feature) {
            DB::table('posts')->insert([
                'post_type' => 'feature',
                'subtitle' => isset($feature['subtitle'])?$feature['subtitle']:"",
                'title' => $feature['title'],
                'description' => $feature['description'],
                'image' => $feature['image'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        foreach ($testimonials as $key => $testimonial) {
            DB::table('posts')->insert([
                'post_type' => 'testimonial',
                'title' => $testimonial['title'],
                'subtitle' => $testimonial['subtitle'],
                'description' => $testimonial['description'],
                'image' => $testimonial['image'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        foreach ($processes as $key => $process) {
            DB::table('posts')->insert([
                'post_type' => 'process',
                'title' => $process['title'],
                'description' => $process['description'],
                'link_name' => $process['link_name'],
                'image' => isset($process['image'])?$process['image']:null,
                'subtitle' => isset($process['subtitle'])?$process['subtitle']:null,
                'link' => $process['link'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
