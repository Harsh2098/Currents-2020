<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/18', function () {
return redirect('/');
});
Route::get('/currents', function () {
return redirect('/');
});
Route::get('/', function () {
return view('20.countdown');
});
Route::get('/hospitality',function(){
	return view('19.hospitality');
});
Route::get('/sponsors',function(){
	return view('19.coming_soon');
});
Route::get('/schedule', function(){
	return view('19.schedule');
});
Route::get('/about',function(){
	return view('19.coming_soon');
});
Route::get('/lectures', function () {
	return view('19.coming_soon');
});
Route::get('/events', function () {
	return view('19.events');
});
Route::get('/workshops',function(){
	return view('20.workshops');
});

Route::get('/contact', function(){
	return view('19.coming_soon');
});
Route::get('/magazines/{file}', function($file_name) {
	$file_path = public_path('magazines/'.$file_name);
	return response()->download($file_path);
});
Route::get('/download/{file}', function($file_name) {
	$file_path = public_path('files/'.$file_name);
	return response()->file($file_path);
});
Route::get('/tronicals', function() {
	return view('19.coming_soon');
});
Route::get('/cca', function() {
	return view('20.cca');
});
Route::get('/cca/apply', function() {
	return view('20.cca_apply');
});
Route::get('/eureka', function() {
	return view('20.eureka');
});
Route::get('/volts', function() {
	return view('20.volts');
});
Route::get('/volts/bengaluru', function() {
	return view('19.bangalore');
});
Route::get('/volts/kochi', function() {
	return view('19.kochi');
});
Route::get('/volts/trichy', function() {
	$arr = ['city' => 'Trichy',
			'college' => 'National Institute of Technology',
			'area' => 'Tiruchirappalli',
			'date' => '25th January 2020',
			'venue' => 'NATIONAL INSTITUTE OF TECHNOLOGY<br>
						TANJORE MAIN ROAD, NH 67,<br>
						THUVAKKUDI,<br>
						TRICHY - 620 015, TAMIL NADU, INDIA.<br>',
			'timings' => '10 AM to 1 PM',
			'cca' => 'https://currents.nitt.edu/cca',
			'link' => 'https://forms.gle/yFCFhXNjLkE2HdQn6',
			'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.682713870967!2d78.81103031422612!3d10.758918092333415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baa8d47758e1ae1%3A0xb3e16389eeab05a!2sNational+Institute+of+Technology+Tiruchirappalli!5e0!3m2!1sen!2sin!4v1547021447827',
		];
	return view('20.gate', $arr);
});
Route::get('/volts/tirunelveli', function() {
	$arr = ['city' => 'Tirunelveli',
			'college' => 'Government College of Engineering',
			'area' => 'Trivandrum Road',
			'date' => '27th January 2019',
			'venue' => 'GOVERNMENT COLLEGE OF ENGINEERING<br>
						TRIVANDRUM ROAD, MARSHAL NAGAR,<br>
						TIRUNELVELI - 627 007, TAMIL NADU, INDIA.<br>',
			'timings' => '2 PM to 5 PM',
			'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.0575711294955!2d77.72359231420609!3d8.686075493759216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b04126138dab5e1%3A0xc295f682e7eeb40d!2sGovernment+College+Of+Engineering%2C+Tirunelveli!5e0!3m2!1sen!2sin!4v1547021018169',
			'cca' => ' https://bit.ly/2Fk9CBX'
		];
	return view('19.gate', $arr);
});
Route::get('/volts/salem', function() {
	$arr = ['city' => 'Salem',
			'college' => 'Mahendra Engineering College',
			'area' => '',
			'date' => '27th January 2019',
			'venue' => 'MAHENDRA ENGINEERING COLLEGE<br>
						SALEM - THIRUCHENGODE HIGHWAY, MAHENDHIRAPURI,<br>
						SALEM - 637 503, TAMIL NADU, INDIA.<br>',
			'timings' => '2 PM to 5 PM',
			'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3910.0475956673354!2d77.99754861423402!3d11.476490391848785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babe0bef703f36d%3A0x90831ca308e9d486!2sMahendra+Engineering+College!5e0!3m2!1sen!2sin!4v1547137576015',
			'link' => 'https://bit.ly/2VDpdlY'
		];
	return view('19.gate', $arr);
});
Route::get('/volts/madurai', function() {
	$arr = ['city' => 'Madurai',
			'college' => 'Mangayarkarasi College of Engineering',
			'area' => 'Madurai',
			'date' => '20th January 2019',
			'venue' => 'MANGAYARKARASI  COLLEGE OF  ENGINEERING,<br>
						7-1-139, 1st STREET, MANGAYARKARASI NAGAR<br>
						MADURAI - 625 402, TAMIL NADU, INDIA.<br>',
			'timings' => '2 PM to 5 PM',
			'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1964.8639747905895!2d78.06675435489949!3d9.95657791127121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c8d51cea3eb9%3A0xfe8b4c2604f377dc!2sMangayarkarasi+College+of+Engineering!5e0!3m2!1sen!2sin!4v1547028014108',
			'link' => 'https://bit.ly/2TElnqH'
		];
	return view('19.gate', $arr);
});
/*Route::get('/volts/chennai', function() {
	$arr = ['city' => 'Chennai',
			'college' => 'Central Leather Research Institute',
			'area' => 'Chennai',
			'date' => '27th January 2019',
			'venue' => 'Near Sardar Patel Road Adyar, CLRI Staff Quarters,<br>
						Indian Institute Of Technology, Chennai,<br>
						Tamil Nadu 600020',
			'timings' => '2 PM to 5 PM',
			'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.4294159863416!2d80.24143651425264!3d13.008303990831767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267976f80a8fd%3A0x2a683d2afe3c7c5a!2sCSIR+-+Central+Leather+Research+Institute!5e0!3m2!1sen!2sin!4v1547797989866',
			'link' => 'https://www.townscript.com/e/mock-gate-examination-chennai'
		];
	return view('19.gate', $arr);
});
*/
Route::get('/volts/coimbatore', function() {
	$arr = ['city' => 'Coimbatore',
			'college' => 'PSG College of Technology',
			'area' => 'Coimbatore',
			'date' => '25th January 2020',
			'venue' => 'Coimbatore, Tamil Nadu 641021',
			'timings' => '10 AM to 1 PM',
			'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15664.742864444032!2d77.0021273!3d11.0246887!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x137d95bfd8909293!2sPSG%20College%20Of%20Technology!5e0!3m2!1sen!2sin!4v1579514876294!5m2!1sen!2sin',
			'link' => 'https://forms.gle/sEZH4cvHCykFJQmz9',
			'cca' => 'https://currents.nitt.edu/cca'
		];
	return view('20.gate', $arr);
});

Route::get('/volts/pondicherry', function() {
	$arr = ['city' => 'Pondicherry',
			'college' => 'National Institute of Technology',
			'area' => 'Pondicherry',
			'date' => '27th January 2019',
			'venue' => 'NIT PONDICHERRY,<br>
						Mandapathur Road, Thiruvettakudy,<br>
						Karaikal, Puducherry 609609',
			'timings' => '10 AM to 1 PM',
			'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.6527290428676!2d79.84282211390261!3d10.9895632582305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a55112d00000001%3A0xf49a63b1a880ea5f!2sNIT%2C+Puducherry!5e0!3m2!1sen!2sin!4v1547797482548',
			'link' => 'https://www.townscript.com/e/simulacrum-currents-pondicherry',
			'gate' => 'https://www.townscript.com/e/mock-gate-examination-pondicherry-gate'
		];
	return view('19.event_or', $arr);
});

Route::get('/workshops/iot', function() {
	$arr = ['title' => 'Internet of Things',
			'bg' => 'iot.jpg',
			'duration' => '6 HOURS',
			'cost' => '2,400/- for a Team',
			'date' => 'FEBRUARY 14th 2020',
			'venue' => 'Orion, NIT Trichy',
			'team_max' => 'A Team can consist of maximum 3 members.',
			'timings' => '9:30 AM to 4:30 PM',
			'link' => 'https://www.townscript.com/e/gesture-controlled-robotics-currents-nit-trichy',
			'overview' => '
				<p>This one day workshop will be based on IoT in Home Automation using Arduino microcontroller.

				The workshop would be conducted in stages beginning with a simple introductory session to the components used in the workshop followed by a step-wise guide to the successful building of the hardware all the way to interfacing a mobile application to controlling the peripherals with the mobile application. The workshop would give participants an insight into the Arduino microcontroller, implement it in the use of WiFi enabled projects, interfacing a mobile application to communicate with the microcontroller and implement the relays for electrical projects.</p>
				<strong>Course Content</strong>
					<ul>
						<li>Learn about the embedded system features of Arduino</li>
						<li>Data acquisition from Arduino over WiFi</li>
						<li>Communicating with Arduino from a mobile application for a GUI enabled user interface</li>
						<li>Controlling peripherals connected to Arduino from the mobile application</li>
					</ul>
			
					<strong>Participants would be able to</strong>
					<ul>
						<li>Utilize Arduino for embedded system projects</li>
						<li>Utilize Arduino launchpad for WiFi enabled projects</li>
						<li>Interface a mobile application which suits their need for communicationwith a microcontroller</li>
						<li>Implement relays in electrical projects</li>
					</ul>
				',
			'contact' => '
				<p>Avinash<br>+91 97903 20049<p>
				<p>Yash<br>+91 99931 67207</p>',
			'color' => 'white',
			'talign' => 'left',
			'team_spec' => 'A Team can consist of maximum 3 members.',
			'prereq' => true,
			'slots' => false
		];
	return view('19.workshop', $arr);
});


Route::get('/workshops/pcb', function() {
	$arr = ['title' => 'PCB DESIGN',
			'bg' => 'pcb.jpg',
			'duration' => '3 HOURS',
			'cost' => '350/- per head',
			'date' => '<br>FEBRUARY 13th 2020, <br> FEBRUARY 14th 2020',
			'venue' => 'Orion, NIT Trichy',
			'team_max' => 'This is an individual workshop.',
			'timings' => '<br>Slot 1 : 05:00 PM - 08:00 PM - FEBRUARY 13th 2020<br>
						  Slot 2 : 05:00 PM - 08:00 PM - FEBRUARY 14th 2020',
			'link' => 'https://www.townscript.com/e/pcb-design-workshop-currents-nit-trichy',
			'overview' => '
				<p>
				Great innovations always start from a simple schematic and then move ahead to
				building of a prototype on a breadboard. Once the prototype shows favourable 
				results, you would want to solidify your results and make it application ready. 
				This stage is the fabrication of the Printed Circuit Boards, or as they are 
				commonly called, PCB. Providing the necessary mechanical support and cluster 
				free electrical connections, PCBs offer ease of monitoring and reliable results 
				when compared to other wiring techniques.</p>
					
				<p>Needless to say, PCB design is an indispensable skill for an engineer working on
				any project.</p>
					
				<p>CURRENTS’20 presents the workshop on PCB design, a comprehensive workshop 
				covering topics right from designing a schematic to getting the PCB layout 
				printed from a manufacturer</p>

				<strong>Course Content</strong>
				<ul>
					<li>Overview of the Printed Circuit Board.</li>
					<li>Introduction to schematic design using a CAD software</li>
					<li>Designing a layout of Printed Circuit Boards</li>
					<li>Utilizing features of layers, traces, ratsnest lines and vias in Printed Circuit Boards</li>
					<li>Manual routing vs Autorouting in Printed Circuit Boards </li>
					<li>Gerber file synthesis </li>
				</ul>

				',
			'contact' => '
				<p>Avinash<br>+91 97903 20049</p>
				<p>Jinesh<br>+91 94864 61891</p>',
			'color' => 'white',
			'talign' => 'right',
			'team_spec' => 'This is an individual workshop.',
			'prereq' => false,
			'slots' => true

		];
	return view('19.workshop', $arr);
});

Route::get('/workshops/verilog', function() {
	$arr = ['title' => 'Digital Design using Verilog',
			'bg' => 'verilog.jpg',
			'duration' => '3 HOURS',
			'cost' => '350/- per head',
			'date' => 'FEBRUARY 13th 2020 &<br> FEBRUARY 15th 2020',
			'venue' => 'Orion, NIT Trichy',
			'team_max' => 'This is an individual workshop.',
			'timings' => '<br>Slot 1 : 05:00 PM - 08:00 PM - FEBRUARY 13th 2020<br>
						  Slot 2 : 05:00 PM - 08:00 PM - FEBRUARY 15th 2020',
			'link' => 'https://www.townscript.com/e/python-workshop-currents-nit-trichy',
			'overview' => '
				<p>
				Soaring high above all other object-oriented programming language due to its elegant code syntax, it’s not surprising for Python to be preferred by tech giants such as Google, YouTube and Quora. With a plethora of open source libraries available for applications in data analysis and web development to name a few, python is versatile to meet the requirements of any coder. CURRENTS’19 presents its workshop to cover basics of programming in Python to kick start your venture into the amazing world of popular coding.</p>
				<strong>Course Content</strong>
				<ul>
				<li>Introduction to digital electronics and circuits.</li>
				<li>Features of Hardware Description Languages and programming paradigms.</li>
				<li>Introduction to Verilog HDL programming – syntax, operators and common blocks.</li>
				<li>Implementing Verilog programs and simulations on ModelSim HDL simulator.</li>
				</ul>
				',
			'contact' => '
				<p>Deepak<br>+91 88707 11551<p>
				<p>Mohit<br>+91 82716 03410</p>',
			'color' => 'white',
			'talign' => 'left',
			'team_spec' => 'This is an individual workshop.',
			'prereq' => false,
			'slots' => true

		];
	return view('19.workshop', $arr);
});

Route::get('/workshops/ar', function() {
	$arr = ['title' => 'AUGMENTED REALITY',
			'bg' => 'ar.jpg',
			'duration' => '6 HOURS',
			'cost' => '450/- per head',
			'date' => 'FEBRUARY 16th 2020',
			'venue' => 'Orion, NIT Trichy',
			'team_max' => 'This is an individual workshop.',
			'timings' => '09:30 AM - 4:30 PM',
			'link' => 'https://www.townscript.com/e/augmented-reality-workshop-currents-nit-trichy',
			'overview' => '
				<p>
				Augmented reality made its debut with Google glasses back in 2013.</p>
<p>
However, the real flare for the innovation began with Niantic’s launch of Pokémon GO that captivated the hearts of young and old in 2016. The interactive gameplay soared above others due to its application of augmented reality enlivening the reality we live in. For those fascinated by this technology, CURRENTS’19 presents a workshop on implementing augmented reality through OpenGL.</p>

				<strong>Course Content</strong>
				<ul>
					<li>Basics of Augemented Reality </li>
					<li>Introduction to OpenGL module on Python</li>
					<li>Transformations and Coordinate systems</li>
					<li>Introduction to AuRuco markers</li>
					<li>Model Loading </li>
					<li>Implementation of AR</li>



				</ul>
',
			'contact' => '
				<p>Ruphan<br>+91 90802 28669</p>
				<p>Aditya<br>+91 94701 86194</p>',
			'color' => 'white',
			'talign' => 'left',
			'team_spec' => 'This is an individual workshop.',
			'prereq' => false,
			'slots' => false

		];
	return view('19.workshop', $arr);
});

Route::get('/workshops/ip', function() {
	$arr = ['title' => 'IMAGE PROCESSING',
			'bg' => 'ip.jpg',
			'duration' => '3 HOURS',
			'cost' => '400/- per head',
			'date' => '<br>14th FEBRUARY 2020, <br> 16th FEBRUARY 2020',
			'venue' => 'Orion, NIT Trichy',
			'team_max' => 'This is an individual workshop.',
			'timings' => '
<br>Slot 1 : 05:00 PM - 08:00 PM - FEBRUARY 14th 2020<br>
Slot 2 : 01:30 PM - 04:30 PM - FEBRUARY 16th 2020<br>',
			'link' => 'https://www.townscript.com/e/image-processing-workshop-currents-nit-trichy',
			'overview' => '
				<p>
				In the age Creative Instagram filters to safety features using facial recognition, signal processing dealing with the manipulation of 2 dimensional digital images has become one of the current trendy technologies. CURRENTS’19 presents the startup pack to the world of Image Processing through the Python programming language. The workshop will cover all that’s needed to code and implement your very own image processing application for human interaction with your device.</p>

				<strong>Course Content</strong>
				<ul>
					<li>Basics of Image Processing </li>
					<li>Introduction to OpenCV module on Python</li>
					<li>Edge detection and image enhancement</li>
					<li>Centroids and Contours</li>
					<li>Interfacing python with 3rd party applications</li>
				</ul>
				',
			'contact' => '
				<p>Ruphan<br>+91 90802 28669</p>
				<p>Raj<br>+91 99730 48519</p>',
			'color' => 'black',
			'talign' => 'right',
			'team_spec' => 'This is an individual workshop.',
			'prereq' => false,
			'slots' => true

		];
	return view('19.workshop', $arr);
});

Route::get('/workshops/ml',function(){
	$arr = ['title' => 'Machine Learning',
			'bg' => 'ml.jpg',
			'duration' => '3 HOURS',
			'cost' => '2100/- for a Team',
			'date' => '<br>14th FEBRUARY 2020',
			'venue' => 'Orion NIT Trichy',
			'team_max' => 'This is an individual workshop.',
			'timings' => '01:30 PM - 04:30 PM<br>',
			'link' => 'https://www.townscript.com/e/embedded-systems-currents-nit-trichy',
			'overview' => '
				<p>Internet of Things is becoming ubiquitous with edge sensor nodes getting more and 
				more intelligent, capable to transmit information directly to a cloud and get 
				controlled/actuated from the cloud.</p>
				
				<p>This hands-on workshop covers the architecture of TI CC3200, which is a wireless 
				micro controller and first in the industry to evolve into a single microcontroller 
				programmable to wireless connectivity(Wi-Fi). </p>
				<p>The workshop is tailored to meet the need of engineering students to get very good 
				exposure to internet enabled systems and their applications.</p>

				<p>Each team should have at least one laptop.</p>

				Laptop requirements : <br>
					1. OS with Windows 7 and above <br>
					2. Minimum 1GB RAM <br>
					3.Minimum disk space of 2GB(4GB recommended). <br>
					4.Smart Phone with a data pack. <br><br>

				<strong>Course Content</strong>
				<ul>
					<li>Introduction to Embedded C</li>
					<li>Embedded C constructs and Data Formats</li>
					<li>Overview of Embedded systems </li>
					<li>General input and output </li>
					<li>Mapping microcontroller’s architecture to Embedded C </li>
					<li>Interrupts, Timers and serial communication </li>
					<li>PWM using timers</li>
					<li>Serial Peripheral Interface</li>
				</ul>
					',
			'contact' => '
				<p>Joel<br>+91 95005 90527</p>
				<p>Dharun<br>+91 85550 55334</p>',
			'color' => 'black',
			'talign' => 'left',
			'team_spec' => 'A Team can consist of three members.',
			'prereq' => false,
			'slots' => false
		];
	return view('19.workshop', $arr);
});

Route::get('/workshops/renewable', function() {
	$arr = ['title' => 'RENEWABLE ENERGY SYSTEMS',
			'bg' => 're.jpg',
			'duration' => '6 HOURS',
			'cost' => '400/- per head',
			'date' => ' 16th FEBRUARY 2019',
			'venue' => 'Orion NIT Trichy',
			'team_max' => 'This is an individual workshop.',
			'timings' => '09:30 AM - 04:30 PM<br>',
			'link' => 'https://www.townscript.com/e/renewable-energy-systems-currents-nit-trichy',
			'overview' => '
				<p>Dwindling coal reserves coupled with the rising awareness about pollution, the shift in interest towards renewable energy was inevitable. In the crude oil industry, the Indian Government has declared that initiatives have been taken to change one-third of the diesel and petrol vehicles to electric by 2030. These developments point towards a promising change for a clean and green Earth in the future. To equip you, the future citizens of the country for this shift, we at CURRENTS’19 present to you a starter pack to kickstart your adventure in the world of renewable energy</p>


				<strong>Course Content</strong>
				<ul>
					<li>Introduction to PV and Power Technologies </li>
					<li>Generation of PV characteristics using MATLAB script</li>
					<li>Introduction to power converters</li>
					<li>Design of power converters in MATLAB/Simulink</li>
					<li>Tour of the Grid connected PV array setup by the NIT Trichy Administration</li>
				</ul>
				',
			'contact' => '
				<p>Joel<br>+91 95005 90527</p>
				<p>Diya<br>+91 97915 05255</p>',
			'color' => 'black',
			'talign' => 'right',
			'team_spec' => 'This is an individual workshop.',
			'prereq' => false,
			'slots' => false
		];
	return view('19.workshop', $arr);
});

Route::get('/workshops/embedded_game_dev', function() {
	$arr = ['title' => 'Embedded Game Development',
			'bg' => 'embedded_game_dev.jpg',
			'duration' => '6 HOURS',
			'cost' => '2,400/- for a Team',
			'date' => '15th FEBRUARY 2020',
			'venue' => 'Orion, NIT Trichy',
			'team_max' => 'A Team of maximum 3 members.',
			'timings' => '09:30 AM - 04:30 PM<br>',
			'link' => 'https://www.townscript.com/e/touch-pad-workshop-currents-nit-trichy',
			'overview' => '
				<p>It’s no secret that companies strive to reach beyond their peaks for bigger and better products, the smartphone industry being no less demanding. The striking features of smart phones mainly lies with its touchscreen. Apart from its display, the precision with which the human input is being received is what sets the mark. Do you have the curiosity to understand the concepts under this phenomenal concept? Come join us in CURRENTS’19 for the understanding and implementation of touchpads in your projects!
</p>

				<strong>Course Content</strong>
				<ul>
				<li>Embedded Systems concepts</li>
				<li>Introduction to the Arduino microcontroller and its programming</li>
				<li>Programming LED matrix using MAX7219 driver</li>
				<li>Creating an interactive snake game on the LED matrix</li>
				</ul>

				',
			'contact' => '
				<p>Deepak<br>+91 88707 11551<p>
				<p>Jinesh<br>+91 94864 61891</p>',
			'color' => 'white',
			'talign' => 'left',
			'team_spec' => 'A team of maximum 3 members.',
			'prereq' => true,
			'slots' => false

		];
	return view('19.workshop', $arr);
});

Route::get('/eureka/register', function() {
	return view('20.eureka_register');
});

Route::get('/feedback', function() {
	return view('19.feedback');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
