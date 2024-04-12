<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            [ 
                'name' => 'DELL KB500 WIRELESS KEYBOARD', 'description' => 'PRODUCTIVITY AT YOUR FINGERTIPS

                Enhance your all-day productivity with this RF 2.4GHz wireless keyboard. The full-sized wireless keyboard comes with a dedicated numeric pad, function keys, and programmed pre-sets that can enhance your efficiency.
                
                CUSTOMIZE YOUR WAY
                
                Gain instant access to your frequently used applications or functions with 12 programmable keys on your keyboard. With the Dell Peripheral Manager software, you can customize settings, program shortcuts, easily pair your devices, check battery and update to the latest firmware.
                
                WORK IN COMFORT
                
                Work with one of the quietest wireless keyboards whether on a conference call or in proximity with others.
                
                The tilt legs offer two adjustable angles for the keyboard, giving you the flexibility to choose your preferred typing position.
                
                The keyboard also comes with spill-resistant keys, providing added protection against accidental spills for a seamless and reliable typing experience.',
                'quantity' => rand(1,30), 'price' => 38.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'LOGITECH POP KEYS WIRELESS MECHANICAL KEYBOARD - MIST SAND', 'description' => 'PERSONALITY THAT POPS

                Unleash personality onto your deskspace and beyond with POP Keys. Together with a matching POP Mouse, let your true self shine with a statement desktop aesthetic and fun customizable emoji keys.
                
                F\'N COOL NEW SHORTCUTS
                
                Don\'t be fooled by POP Keys\' vintage aesthetic. Its 12 new FN shortcuts give you what you really need today - helping you snip screen, trigger Voice-to-Text, Mute your mic in a long meeting, and much more at the tap of a key.
                
                CONNECT TO THREE DEVICES AT ONCE
                
                Unleash your personality across multiple devices at a time using POP Keys\' Easy Switch keys—which let you pair up to 3 devices and switch typing between them with a single tap. Connect to your computer, tablet or phone using Bluetooth® wireless technology or Logi Bolt USB receiver.
                
                It works on Windows, macOS, Chrome OS, Android, iOS, and iPadOS.
                
                COMPACT AND COMFY
                
                All the keys you need on a space-saving frame. Scooped round keys match the shape of your fingertips for snug and smooth touch-typing. Plus, POP Keys\' compact design lets you place your mouse closer for less arm reaching, more comfort, and better body posture.
                
                YOURS FOR THE LONG HAUL
                
                In true Logitech fashion, POP Keys is designed to last. With up to three years\' battery life and keys that can endure up to 50 million strokes (that\'s a lot), you can create, chat, and express yourself to your heart\'s content.',
                'quantity' => rand(1,30), 'price' => 149.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'ASUS VIVOBOOK GO E1504F-ANJ871WS RYZEN 3', 'description' => 'PERFORMANCE 
                Up to Up to AMD Ryzen™ 3 7320U Mobile Processor, 8 GB of fast LPDDR5 memory, 512 GB of speedy SSD storage to make sure there is always plenty power on tap.
                
                BATTERY
                Fast charging support, you can charge a low battery to 60% in as little as 49 minutes so you\'ll be up and running quicker than ever.
                
                CONNECTIVITY
                Up to WiFi 6E fast resolution along with ASUS WiFi Master technology, the Vivobook series enhance fast and stable connection.
                
                THIN & LIGHT
                17.9 mm and 1.63 kg thin and light design for easy one-handed carrying.
                
                180° LAY-FLAT HINGE
                The 180° lay-flat hinge makes it so much easier when you want to share stuff with those around you.',
                'quantity' => rand(1,30), 'price' => 599.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'ASUS TUF A15 FA507N-VLP108W RYZEN 5', 'description' => 'BRAND NEW DESIGN

                The chassis has been redesigned for 2023, now 4.5% smaller than the previous generation. The Jaeger Gray edition features a large laser-sculpted design. The four way indicators can be seen even while the clamshell is closed, and the touchpad features a mech-inspired TUF logo in the corner.
                
                READY FOR ANYTHING
                
                Jump right into the action with the TUF Gaming A15. Running Windows 11 out of the box with up to an AMD Ryzen™ 9 7940HS processor and up to 16GB of blisteringly fast 4800MHz DDR5 RAM, your streaming and multitasking are handled with ease. Leverage the full gaming performance of up to an NVIDIA® GeForce RTX™ 4060 Laptop GPU with a dedicated MUX Switch. When your game library gets full, an empty M.2 NVMe SSD slot makes upgrading storage capacity a breeze.
                
                BLOW AWAY THE COMPETITION
                
                High core count CPUs create more heat when at full load. The TUF Gaming A15 is equipped to handle its high-power CPU with a pair of 84-blade Arc Flow Fans™. Our new variable thickness design has the dual benefit of increasing pressure while reducing turbulence, improving cooling performance without extra noise. When paired with up to four exhaust vents and five dedicated heatpipes, the 2023 TUF Gaming A15 keeps its cool in even the most demanding games.
                
                TAKE CHARGE
                
                A 90Wh battery paired with up to a power-efficient AMD Ryzen™ 9 7940HS processor provides ample endurance for hours of web browsing and video playback, with fast charging technology returning the machine to 50% charge in just 30 minutes.',
                'quantity' => rand(1,30), 'price' => 1598.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'ACER ASPIRE3 A315-510P-C6S0 INTEL N100', 'description' => 'READY-TO-GO PERFORMANCE

                The Aspire 3 is ready-to-go with the latest 12th Gen Intel® Core™ Processors1 with Iris® Xe Graphics—ideal for the entire family, with performance and productivity at the core. Perfect to get more out of work, study, or play.
                
                IMPROVED THERMALS
                
                With a 78% increase in fan surface area, enjoy an improved thermal system and an additional 17% thermal capacity3. Allowing for longer, more efficient work sessions while not plugged in4.
                
                PURPOSEFUL DESIGN
                
                With a sleek metal cover1 available in new vibrant colors1, the Aspire 3 is lighter and thinner than ever before at 1.6kg1 and 18.9mm1. While a long-lasting battery allows for the family to get more done between charges.
                
                THE DISPLAY
                
                The 1080p FHD1 display is perfect for casual web browsing and streaming videos, allowing for sharp, detailed images. And with Acer BlueLightShield™, lower the levels of blue light exposure to you and your loved ones.
                
                THE CONNECTIVITY
                
                Connect or charge your newest devices on the full-function USB Type-C port. In addition, Wi-Fi 6E1,2 and HDMI 2.1 provide increased productivity and functionality for the whole family.',
                'quantity' => rand(1,30), 'price' => 498.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'DELL ALIENWARE AURORA R13 i7-12700KF', 'description' => 'SPACIOUS INTERIOR, SUPERIOR THERMALS

                Revolutionary design
                Take your gaming to new heights with the Aurora R13, featuring the new Legend 2.0 design that provides a 50% increase to internal volume*. The more spacious, tool-less design improves accessibility, while enabling better cable management and quieter acoustics.
                
                Optimized airflow
                The new Legend 2.0 design prioritizes cooling via a reorganized internal layout, which in turn creates less airflow obstructions. With less obstructions, fans can provide more airflow with less effort—resulting in the performance you want and the quieter acoustics you deserve.
                
                Upgraded thermals
                Marathon gaming sessions welcome, thanks to robust thermal architecture that enables up to four system fans and different liquid cooling options. For those seeking to upgrade from the air-cooled model, there\'s a choice of standard liquid cooling or an Alienware Cryo-Tech™ edition liquid cooler—available for the first time on a desktop.
                
                Revolutionary design
                Take your gaming to new heights with the Aurora R13, featuring the new Legend 2.0 design that provides a 50% increase to internal volume*. The more spacious, tool-less design improves accessibility, while enabling better cable management and quieter acoustics.
                
                Optimized airflow
                The new Legend 2.0 design prioritizes cooling via a reorganized internal layout, which in turn creates less airflow obstructions. With less obstructions, fans can provide more airflow with less effort—resulting in the performance you want and the quieter acoustics you deserve.
                
                Upgraded thermals
                Marathon gaming sessions welcome, thanks to robust thermal architecture that\'s available with different liquid cooling options. There\'s a choice of standard liquid cooling or an Alienware Cryo-Tech™ edition liquid cooler—available for the first time on a desktop.
                
                COOL UNDER PRESSURE WITH CRYO-TECH™
                
                Next-level liquid cooling:
                
                Cryo-Tech™ delivers exactly what serious gamers crave: superior thermal performance. If that weren\'t enough, when you opt for Cryo-Tech™, you\'re on the receiving end of exclusive lighting features—giving you the best-looking high performance gaming experience on the market.',
                'quantity' => rand(1,30), 'price' => 2998.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'TPLINK ARCHER AX12 AX1500 DUAL-BAND WIRELESS GIGABIT WIFI6 ROUTER', 'description' => 'Advanced 4G+ Router- supports 4G+ Cat6 to boost the data speeds of up to 300 Mbps*
                Plug a SIM card and play - no configurations needed, compatibility of SIM cards in 100+ countries are assured by years of field tests
                MU-MIMO supported - simultaneous data streams increase WiFi throughput and network efficiency.
                Supports TP-Link OneMeshTM - co-works with TP-Link OneMesh products to create a flexible and cost-efficient Mesh network
                Better Signal for Connections Everywhere - enjoy stable and efficient connections to every device thanks to the two external detachable LTE antennas
                Full Gigabit Ports - provides reliable wired connections for bandwidth-intensive devices such as game consoles and IPTVs
                Wi-Fi Router Mode - plug an Ethernet cable into the LAN/WAN port for flexible access as a backup option if you can\'t get a 4G connection
                Easy setup and management all by Tether app',
                'quantity' => rand(1,30), 'price' => 75.90, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'TPLINK DECO M4 (2-PACK) AC1200 WHOLE HOME MESH WIFI SYSTEM', 'description' => 'Deco uses a system of units to achieve seamless whole-home Wi-Fi coverage — eliminate weak signal areas once and for all!
                With advanced Deco Mesh Technology, units work together to form a unified network with a single network name. Devices automatically switch between Decos as you move through your home for the fastest possible speeds.
                A Deco M4 two-pack delivers Wi-Fi to an area of up to 3,800 square feet. And if that\'s not enough, simply add more Decos to the network anytime to increase coverage.
                Deco M4 provides fast and stable connections with speeds of up to 1167 Mbps and works with major internet service provider (ISP) and modem.
                Deco can handle traffic from even the busiest of networks, providing lag-free connections for up to 100 devices.
                Parental Controls limits online time and block inappropriate websites according to unique profiles created for each family member.
                Setup is easier than ever with the Deco app there to walk you through every step.',
                'quantity' => rand(1,30), 'price' => 109.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'MSI 24" ESPORTS G24C4 E2 1K FHD 180HZ 1MS VA CURVED', 'description' => 'Curved Gaming display (1500R) - The best gameplay immersion.
                180Hz Refresh Rate - Real smooth gaming.
                1ms response time - eliminate screen tearing and choppy frame rates.
                Wide Color Gamut - Game colors and details will look more realistic and refined, to push game immersion to its limits.
                Anti-Flicker and Less Blue Light - game even longer and prevent eye strain and fatigue.
                Frameless design - Ultimate gameplay experience.
                178° wide view angle',
                'quantity' => rand(1,30), 'price' => 199.89, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'ACER 27" SA272U E MONITOR', 'description' => 'Dive into smooth and vibrant visuals with our monitor\'s refresh rate of 2560x1440@100Hz, ensuring clear images whether you\'re gaming or watching movies.

                React quickly to on-screen action with our 1 ms response time (VRB), preventing blurring for a sharp viewing experience, perfect for fast-paced games and action movies.
                
                Enjoy bright and vivid images with a brightness of 250 nits, making every detail easy to see whether your room is bright or dim.
                
                Experience lifelike visuals with a contrast ratio of 1000:1, giving depth to your content with deep blacks and bright whites.
                
                Connect easily to your devices with 2x HDMI 2.0 ports, DisplayPort, audio out, and built-in speakers, so you can enjoy audio without extra equipment.',
                'quantity' => rand(1,30), 'price' => 208.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'MSI 27" OPTIX G2712F 1K FHD 170HZ 1MS IPS', 'description' => 'PS Panel - Optimize screen colors and brightness to enhance your viewing experience.
                170Hz Refresh Rate - Respond faster with smoother frames.
                1ms Response Time - Eliminate screen tearing and choppy frame rates.
                Wide Color Gamut - Game colors and details will look more realistic and refined.
                Night Vision - Smart black tuner to brighten your day by bringing out the fine details in dark areas.
                Frameless design - Enjoy the ultimate gaming experience with super narrow bezels.
                Anti-Flicker and Less Blue Light - Game even longer and prevent eye strain and fatigue.
                178° Wide Viewing Angle - Colors and details will stay sharp at more angles with a 178° wide viewing angle.',
                'quantity' => rand(1,30), 'price' => 229.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'ACER NITRO 31.5" ED320QRS3 CURVED MONITOR', 'description' => 'Immerse yourself in the expansive visual canvas of our 31.5" viewable screen size, which offers ample space for immersive gaming, productive multitasking, and captivating multimedia experiences, allowing you to dive into your favorite content with unparalleled depth and clarity.

                Experience the epitome of visual fidelity with our Full HD screen mode, where every pixel is meticulously rendered in stunning detail and clarity, ensuring that your games, movies, and applications come to life with lifelike realism and vibrancy that captivates the senses.
                
                Engage in fluid and responsive gameplay with our Vertical Alignment (VA) panel technology, which delivers rich colors, deep contrasts, and wide viewing angles, providing an immersive and enjoyable viewing experience from any perspective, whether you\'re gaming, watching movies, or working on creative projects.
                
                React and respond swiftly to the action unfolding on screen with our lightning-fast 1 ms response time, ensuring that every motion is rendered with pinpoint accuracy and minimal blur, allowing you to stay one step ahead of the competition in fast-paced gaming scenarios or action-packed movie scenes.
                
                Unleash the full potential of your gaming experience with our 16:9 aspect ratio, which provides a widescreen viewing format that enhances immersion and cinematic flair, allowing you to enjoy your favorite games and movies in their intended aspect ratio with breathtaking clarity and realism.
                
                Achieve stunning visual clarity and precision with our maximum resolution of 1920 x 1080, which delivers sharp and detailed imagery that brings your content to life with unparalleled sharpness and detail, ensuring that every frame is rendered with lifelike realism and vibrancy.
                
                Experience buttery-smooth gameplay and fluid motion with our standard refresh rate of 165 Hz, which delivers seamless and tear-free visuals that elevate your gaming experience to new heights of immersion and responsiveness, allowing you to enjoy your favorite games with silky-smooth precision and clarity.',
                'quantity' => rand(1,30), 'price' => 248.50, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'ASUS 15.6" ZENSCREEN MB166C PORTABLE FULL HD IPS', 'description' => 'nch Full HD portable anti-glare IPS display with an ultraslim and thin design helps you get things done more efficiently when you\'re on the go
                USB Type-C connector (DP Alt mode) for user convenience and compatibility with compatible devices
                ASUS Eye Care monitors feature TÜV Rheinland-certified Flicker-free and Low Blue Light technologies to ensure a comfortable viewing experience.
                Automatically sense its orientation and switch the monitor between landscape and portrait modes via DisplayWidget software.​
                User-friendly design with embedded tripod socket on the rear and foldable sleeve for versatility.',
                'quantity' => rand(1,30), 'price' => 278.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'ACER 23.8" EK241Y E MONITOR', 'description' => '4K UHD Resolution1 - See Every Detail in Unbelievable Clarity
                IPS Display - Vivid Colors at a Viewing Angle of up to 178°
                10 Bit Color Depth1 - Fantastically Smooth Images
                4ms Response Time - React and Respond Quickly to What You See on Screen
                BlueLightShield™ - Reduces Exposure to Blue Light
                ZeroFrame Design - Improved Enjoyment and Maximum Visibility',
                'quantity' => rand(1,30), 'price' => 118.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'ACER 27" VERO CB271 MONITOR', 'description' => 'Great Visuals

                Work or play in style. These QHD1 (2560 X 1440) displays with IPS panels give you wider viewing angles, high contrast ratios, and Delta E <1 color accuracy so that you always have a great viewing experience.
                
                Convenient Viewing
                
                With Acer ErgoStand, the display allows users to flexibly adjust the height and angle of the monitor\'s screen to their liking. It also features a USB Type-C Port with 65W PD for more flexible placement and a tidier desk.
                
                Environmentally Friendly
                
                This series is ENERGY STAR®, TCO, and EPEAT certified and is made using 85% PCR and 5% ocean-bound plastics, reflecting Acer\'s commitment to the environment.
                
                Smoother Images
                
                Experience crystal-clear images with AMD FreeSync™ and a low response time of 1ms (VRB).
                
                Protecting Your Eyes
                
                These TUV/Eyesafe® certified displays also feature Acer VisionCare 2.0 eye-protecting technologies such as Acer BlueLightShield Pro, Flickerless, Low-dimming, and ComfyView.',
                'quantity' => rand(1,30), 'price' => 268.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'MSI 32" ESPORTS G32CQ4 E2 2K WQHD', 'description' => 'See beyond the game, Visualize your victory

                CURVED FOR YOUR VIEWING PLEASURE - Optix monitors use a curved display panel that has a curvature rate of R1500, which is the most comfortable and suitable for a wide range of applications from general computing to gaming. Curved panels also help with gameplay immersion, making you feel more connected to the entire experience.
                 
                
                165HZ REFRESH RATE + 1MS RESPONSE TIME- Optix monitors are equipped with a 165Hz refresh rate and 1ms response time VA panel which has the most benefit in fast moving game genres such as first-person shooters, fighters, racing sims, real-time strategy, and sports. These types of games require very fast and precise movements, which an ultra-high refresh rate and fast response time monitor will put you ahead of your competition.
                 
                
                 
                
                TEAR FREE, STUTTER FREE, FLUID GAMING - Gaming shouldn\'t be a choice between choppy gameplay or broken frames. With MSI Optix series gaming monitors, it doesn\'t have to be. Get fluid, artifact-free performance at virtually any framerate with AMD FreeSync™ technology.
                 
                
                FROM EDGE TO EDGE - With a super narrow bezel, enjoy the best immersion possible in the latest games with a multi-monitor 180degree setup. Enjoy better continuity between screens while playing games, working, or general computing.
                 
                
                 
                
                ANTI-FLICKER TECHNOLOGY -Generic monitor displays normally have a flicker-rate of about 200-times per second, which is unnoticeable to the naked eye, but can cause fatigue over time. MSI Anti-Flicker technology provides a very comfortable viewing experience by reducing the amount of flicker.',
                'quantity' => rand(1,30), 'price' => 399.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'ACER 21.5" UT222Q MONITOR', 'description' => '10 Point Touch

                Integrated sensor technology allows for the interpretation of multiple touch gestures, providing easier navigation and interaction.
                
                Vibrant Colors
                
                Crisp, true-to-life colors come alive in Full HD IPS 1080p resolution in 16:9 and 6-axis color adjustment. Presentations, text and anything else needing to be shared is more visible with the 178° wide viewing angle.
                
                AMD FreeSync™
                
                Every AMD FreeSync™ monitor goes through a rigorous certification process to ensure a tear free, low latency experience.
                
                ZeroFrame Design
                
                The near bezel-less design creates a more seamless look, allowing you to see more of what matters most: the screen.
                
                Durable, Anti-glare Display
                
                The 7h hardness display with special, anti-glare coating ensures reliable operation in all lighting conditions by reducing reflections, repelling fingerprints, and resisting scratches.
                
                ErgoStand1 Functionality
                
                The unique dual-hinge mechanism allows you to tilt the display to the perfect angle (15° - 70°), easily adapting to a variety of scenarios such as Point of Sales (POS), table menus, and more.',
                'quantity' => rand(1,30), 'price' => 319.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'DELL 23.8" C2423H FHD VIDEO CONFERENCING MONITOR', 'description' => 'CONVENIENT POP-UP WEBCAM

                High quality collaboration:FHD conferencing webcam delivers seamless video and screen clarity.
                
                Seamless privacy: Pop-up webcam smartly hides the camera when you push it down.
                
                View from the best angles: IPS technology delivers superior picture quality and consistent colour with wide-view angles ideal for video conferencing.
                
                SIMPLIFIED CONFERENCING AUDIO
                
                Clear communication:Built-in echo cancelling microphone and dual 5W speakers.
                
                Enhanced privacy:Convenient mute button delivers quick security and protection.
                
                Intuitive desktop experience
                
                Password-free login with secure facial recognition from Windows Hello.
                
                HANDS-FREE COMMANDS VIA CORTANA™.
                
                Designed for comfort and efficiency
                
                Designed with wellness in mind:ComfortView Plus—an always-on, built-in low blue light screen—reduces potentially harmful blue light emissions without compromising colour*.
                
                Convenient adjustability:Experience made-for-you comfort by tilting, swiveling, pivoting and adjusting the height of your monitor (150mm max) for optimal viewing comfort.
                
                Expand your productivity:Experience uncompromised picture quality by connecting two monitors with a single DP cable. As a bonus, you can boost productivity by up to 21%* with a dual monitor setup.',
                'quantity' => rand(1,30), 'price' => 498.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'VIEWSONIC PA503W 3600 LUMENS WXGA ENTRY DLP PROJECTOR', 'description' => 'The PA503W offers impressive visual performance in small business meeting rooms and classrooms. With higher brightness and longer lamp life, PA503W projector is guaranteed to reproduce the finest of details in any environment for much longer.

                SuperEco Mode
                
                When the projector has not received an input signal for 20 minutes, projected images are dimmed to 70%, extending the lamp\'s lifespan to 15,000 hours on average.
                
                Automatic Sleep Timer
                
                Forgetting to shut off projectors is a common occurrence, especially in public spaces such as classrooms and meeting rooms. PA503W\'s sleep timer allows you to select a period of inactivity that will determine when the projector should put itself into sleep mode automatically.
                
                Auto Power Off
                
                When no signal has been detected, the projector will automatically power off to conserve energy and lamp life.
                
                Bright Images in Any Environment
                
                3,800 ANSI Lumens of brightness and a 22,000:1 high contrast ratio guarantee the production of bright images in any environment, including rooms with high ambient light.
                
                Amazing Colour Accuracy
                
                ViewSonic\'s proprietary SuperColour™ Technology displays a wide range of visible colour, ensuring that users enjoy more realistic and accurate colour in both bright and dark environments without sacrificing image quality.
                
                Remote Control Functionality
                
                This projector can be assigned to 8 different remote control codes in the same venue through a single remote control for effortless projector selection, configuration and operation during lessons or meeting. It can also operate certain projectors when the coded are fitted both on the projector and on the remote control.',
                'quantity' => rand(1,30), 'price' => 799.99, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'ACER X1328WH DLP PROJECTOR (4500 LUMENS)', 'description' => '5,000 LUMENS BRIGHTNESS

                See crystal-clear, vibrant images from a distance in lecture halls, auditoriums or any large venues with up to 5,000 lumens of brightness
                
                ACER COLORBOOST3D™
                
                Reproduce lifelike colors and brilliantly bright images with Acer ColorBoost3D™ technology.
                
                ACER COLORSAFE II
                
                Enjoy consistent, natural colors with ColorSafe II technology, which controls the dynamic RGB levels to prevent color decay.
                
                ACER LUMISENSE™
                
                Acer LumiSense™ adjusts the image brightness and color saturation based on the content you\'re viewing.
                
                ACER BLUELIGHTSHIELD™
                
                Protect your eyes from unnecessary strain by utilizing Acer BlueLightShield™ technology.
                
                INTEGRATED SPEAKERS
                
                What you hear will be just as good as what you see with the powerful built-in speakers.',
                'quantity' => rand(1,30), 'price' => 568.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'VENTION 1IN8 OUT HDMI SPLITTER', 'description' => 'Splits full HD 4K HDMI signal to 8 HDMI displays completely, has the ability to buffer and amplifying',
                'quantity' => rand(1,30), 'price' => 116.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'WACOM CTL 6100WL P0 CX INTUOS CREATIVE PEN TABLET ', 'description' => '4096 pen pressure sensitivity
                Battery-free pen using EMR (Electro-Magnetic Resonance) technology
                +/- 0.25 mm digital tolerance in accuracy
                7mm reading height ; Compatibility: Windows, Mac ; Connection: USB only
                models available ; Reading Speed (pen): 133 pps',
                'quantity' => rand(1,30), 'price' => 328.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'UGREEN MINI DISPLAY PORT TO DISPLAY PORT CABLE', 'description' => '8b/10b data transmission (up to 2.7GHz symbol rate, up to 4 lanes)
                Full bandwidth transmission (2560x1600p@60Hz) color depth of 6, 8, 10, 12 and 16 bits per component
                DPCP (DisplayPort Content Protection)',
                'quantity' => rand(1,30), 'price' => 9.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'ANYCAST M2 PLUS HDMI DONGLE WIFI DISPLAY ADAPTER RECEIVER', 'description' => 'Supports up to 1080p 30 fps resolution
                Supports AirPlay
                Supports Miracast',
                'quantity' => rand(1,30), 'price' => 28.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'DIVOOM PIXOO 64 PIXEL FRAME', 'description' => 'Great room decor

                The breadth of different motifs is really great and a real eye-catching decor in every office, every gaming lounge, every store or just on the bedside table! 
                
                Pixel art creation
                
                This is a pixel art display that can be customized to whatever pixel art you like on the screen. On the Divoom app, you are given the option of designing you own image , animation and scrolling text message - all offering a large variety of options. There are lots of set images or you can choose to create your own image either with or without text.
                
                Social media 
                
                Keep track of the performance of a video or a social media account. With the Pixoo-64, you can celebrate every milestone with your followers. 
                
                Works with Alexa 
                
                Add voice control by combining with an Alexa device for simple voice commands (Only for location in US & UK)
                
                Easy to set up
                
                There are many ways to display this sleek black matte square frame, too. It comes with a stand that you can attach to the back which is very handy, also has a hanging slot to hang on a wall.',
                'quantity' => rand(1,30), 'price' => 139.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'ACER WALL MOUNT PROJECTOR SCREEN', 'description' => 'Ideal brightness video effect due to high gain quality matte white material
                Steel casing with advance technology roller mechanism
                Heavy duty roller and spring
                Freedom to pull, stop and any position
                Reliable locking system ensure smooth presentation
                Easy to assemble, suitable for both wall & ceiling mounted
                With auto-fixed function, can stop at any position
                Black border to gain best video image
                Travelers\' mobility screen for easy and simple image presentation',
                'quantity' => rand(1,30), 'price' => 58.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'UGREEN HDMI TO USB-C VIDEO CAPTURE DEVICE', 'description' => 'USB C to HDMI-The USB Type C Adapter can easily connect a USB-C enabled computer or laptop to an HDTV, monitor or projector with HDMI input; An ideal solution for conference, presentation, gaming, or expanding workspace by connecting your USB-C devices to a larger screen.
                4K 60HZ Supported-The USB C to HDMI Adapter supports video resolution up to 3840x2160 @ 60Hz and full HD 1080p. You can extend or mirror your digital devices with USB-C to your HDMI-enabled TV or display.
                Plug and Play-No Driver and extra power needed for this thunderbolt 3 to HDMI adapter, quite easy to use.',
                'quantity' => rand(1,30), 'price' => 208.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'HAVIT SK715 2.0 USB SPEAKER', 'description' => 'High Quality Sound: Specially designed for immersive movie and music experiences. With these speakers you will get not just sound, but a real symphony of emotions.
                Compact and Versatile: Taking up minimal space, they become the ideal partner for a computer, laptop or even a mobile device. Connect them using an AUX (3.5mm) and USB cable and you\'re ready for a new level of sound.
                Impressive Design: Stylish black speakers will be a great addition to any interior. Adding not only audio but also visual elements to your space.',
                'quantity' => rand(1,30), 'price' => 15.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'RAZER LEVIATHAN V2 X - PC GAMING SOUND BAR ', 'description' => 'Introducing the Razer Leviathan V2 X - PC Gaming Sound Bar, Pokémon Edition, a cutting-edge audio solution designed to elevate your gaming experience to new heights. Let\'s explore the outstanding features that make the Leviathan V2 X a must-have for Pokémon enthusiasts and gaming aficionados alike.

                Immerse yourself in rich, high-fidelity sound with the Leviathan V2 X\'s full-range driver unit. Whether you\'re navigating the world of Pokémon or engaging in intense gaming battles, experience every audio detail with stunning clarity and precision.
                
                Featuring a sleek and streamlined desktop design, the Leviathan V2 X seamlessly integrates into your gaming setup, complementing your gaming rig with its stylish aesthetics. Enhance your gaming space with the iconic Pokémon Edition design, showcasing your passion for gaming and pop culture.
                
                Experience seamless connectivity with USB Type C power and audio transmission capabilities. Say goodbye to cluttered cables and hello to simplified setup, as the Leviathan V2 X offers both power and audio transmission through a single USB Type C connection. Enjoy hassle-free gaming sessions without compromising on performance.',
                'quantity' => rand(1,30), 'price' => 168.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'HAVIT SK829BT WATERPROOF WIRELESS SPEAKER', 'description' => 'Introducing the HAVIT SK829BT - your ultimate companion for superior portable audio. Engineered to deliver an unmatched auditory experience, this powerhouse boasts a rated power of 10W with an impressive peak power of 15W, ensuring that every note and beat is reproduced with clarity and depth.

                Designed to withstand the elements, the HAVIT SK829BT features an IPX6 waterproof rating, providing robust protection against water splashes, making it perfect for outdoor adventures or poolside gatherings. Wherever you go, enjoy your favorite tunes without worry.
                
                Versatility is at your fingertips with the HAVIT SK829BT. Connect effortlessly via Bluetooth for wireless freedom, or utilize the AUX input for a direct connection to your devices. Experience true stereo sound by pairing two speakers together with TWS (True Wireless Stereo) technology, immersing yourself in a rich, multi-dimensional audio experience.
                
                Elevate your ambiance with vibrant RGB lighting that syncs with your music, adding a dynamic visual element to your listening experience. With support for voice assistants, control your music playback and access information with ease, all with just your voice.
                
                Stay connected on the go with built-in hands-free calling functionality. Take calls directly through the speaker, ensuring clear and crisp communication no matter where you are. With a wireless working range of 18 meters (without obstacles), enjoy freedom of movement without sacrificing audio quality.
                
                Charging is a breeze with the convenient TYPE-C charging method, offering faster and more efficient charging than ever before. Constructed from high-quality ABS and fabric materials, the HAVIT SK829BT is built to withstand the rigors of daily use while maintaining a sleek and stylish appearance.
                
                Experience the pinnacle of portable audio excellence with the HAVIT SK829BT. Whether you\'re at home, on the move, or exploring the great outdoors, let our speaker elevate every moment with unparalleled sound quality, versatility, and durability.',
                'quantity' => rand(1,30), 'price' => 39.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            [ 
                'name' => 'LOGITECH S150 SPEAKER', 'description' => 'CLEAR STEREO MADE SIMPLE

                This slim, lightweight speaker design offers simple controls and easy setup for a convenient listening experience. Compact, moveable speakers let you easily customize to your setup.
                
                USB AUDIO AND POWER
                
                Connection is simple and quick. Just plug the speakers into your computer USB-A port. An orange LED stays lit when your speakers are on. Disconnect the USB-A cable to power off.
                
                EASY CONTROLS
                
                We kept controls really simple: volume and mute. Both are conveniently located on the front of the right speaker so you can easily adjust your audio experience.
                
                SLIM DESIGN
                
                They are lightweight and easy to move around so you can accommodate your setup and get perfect sound wherever you are.',
                'quantity' => rand(1,30), 'price' => 25.00, 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            ],
            // [ 
            //     'name' => '', 'description' => '',
            //     'quantity' => rand(1,30), 'price' => , 'last_updated_by' => rand(1,5), 'created_at' => now(), 'updated_at' => now()
            // ],

        ]);
    }
}
