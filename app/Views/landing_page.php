<!doctype html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Persekutan mahasiswa Kristen antar universitas kota Surabaya, bagian dari Perkantas Jatim">
  <meta name="keywords" content="pmk kota surabaya, pmk surabaya, pmk kota, pmk, perkantas surabaya, perkantas, persekutuan mahasiswa kristen">
  <meta name="author" content="PMK Kota Surabaya">
  <title>PMK Kota Surabaya</title>
  <!-- <link href="css/app.css" rel="stylesheet" /> -->
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <script src="js/jquery.js"></script>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="bg-gray-800 shadow-md fixed w-full top-0 left-0 z-50" style="opacity: 80%;">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <a href="#" class="text-3xl font-bold text-white"><img class="h-12" src="logo.png" alt=""></a>
      <!-- <a href="#" class="text-3xl font-bold text-white">PMK Surabaya</a> -->
      <div class="hidden md:flex space-x-6">
        <a href="#" class="text-gray-400 hover:text-white">Home</a>
        <a href="#" class="text-gray-400 hover:text-white">About</a>
        <a href="#" class="text-gray-400 hover:text-white">Features</a>
        <a href="#" class="text-gray-400 hover:text-white">Gallery</a>
        <a href="#" class="text-gray-400 hover:text-white">Contact</a>
      </div>
      <a href="#" class="md:hidden text-white">Menu</a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="bg-cover bg-center text-white py-40" style="background-image: url('img/hero.jpg'); background-blend-mode: overlay; opacity:90%; background-color: rgba(31, 41, 55, 1);">
    <div class="container mx-auto px-6 text-center">
      <h1 class="text-4xl md:text-6xl font-bold">Student Today Leader Tomorrow</h1>
      <p class="mt-4 text-lg md:text-xl text-gray-300">Our product will help you scale and grow like never before.</p>
      <a href="#" class="mt-8 inline-block bg-blue-600 text-white px-8 py-3 rounded-full text-lg font-semibold hover:bg-blue-500 transition">Get Started</a>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-16 bg-gray-900">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold text-center text-white">Powerful Features</h2>
      <p class="mt-4 text-center text-gray-400">Explore the amazing features that make our product stand out.</p>
      <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Feature 1 -->
        <div class="p-8 bg-gray-800 shadow-lg rounded-lg text-center">
          <span class="block bg-blue-600 text-white rounded-full p-4 w-16 h-16 mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12h18m-9-9v18" />
            </svg>
          </span>
          <h3 class="mt-6 text-xl font-semibold text-white">Easy to Use</h3>
          <p class="mt-4 text-gray-400">Our intuitive interface lets you get started right away with minimal learning curve.</p>
        </div>
        <!-- Feature 2 -->
        <div class="p-8 bg-gray-800 shadow-lg rounded-lg text-center">
          <span class="block bg-blue-600 text-white rounded-full p-4 w-16 h-16 mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m2 0a2 2 0 110 4m0 0a2 2 0 110 4m0-8a2 2 0 11-4 0m0 0a2 2 0 11-4 0m0 0a2 2 0 11-4 0" />
            </svg>
          </span>
          <h3 class="mt-6 text-xl font-semibold text-white">Fully Responsive</h3>
          <p class="mt-4 text-gray-400">Works perfectly on any device, from desktop to mobile.</p>
        </div>
        <!-- Feature 3 -->
        <div class="p-8 bg-gray-800 shadow-lg rounded-lg text-center">
          <span class="block bg-blue-600 text-white rounded-full p-4 w-16 h-16 mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 13l3 3 7-7" />
            </svg>
          </span>
          <h3 class="mt-6 text-xl font-semibold text-white">Scalable Solutions</h3>
          <p class="mt-4 text-gray-400">Our platform grows with you, no matter how big your business gets.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="py-16 bg-gray-900">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold text-center text-white">Our Gallery</h2>
      <p class="mt-4 text-center text-gray-400">Check out some of the best moments captured with our product.</p>
      <div class="mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Image 1 -->
        <div>
          <img class="w-full h-64 object-cover rounded-lg shadow-lg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBgCPQmyPHrOWxnUvbmQIRwOipjW8woZUreA&s" alt="Gallery Image 1">
        </div>
        <!-- Image 2 -->
        <div>
          <img class="w-full h-64 object-cover rounded-lg shadow-lg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBgCPQmyPHrOWxnUvbmQIRwOipjW8woZUreA&s" alt="Gallery Image 2">
        </div>
        <!-- Image 3 -->
        <div>
          <img class="w-full h-64 object-cover rounded-lg shadow-lg" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBgCPQmyPHrOWxnUvbmQIRwOipjW8woZUreA&s" alt="Gallery Image 3">
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonial Section -->
  <section class="py-16 bg-gray-800">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold text-center text-white">What Our Customers Say</h2>
      <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Testimonial 1 -->
        <div class="p-8 bg-gray-900 shadow-lg rounded-lg">
          <p class="text-gray-400">"This product has changed the way we do business. It's incredibly easy to use and has helped us grow tremendously."</p>
          <div class="mt-4 flex items-center">
            <img class="w-12 h-12 rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBgCPQmyPHrOWxnUvbmQIRwOipjW8woZUreA&s" alt="User Image">
            <div class="ml-4">
              <h3 class="text-white font-semibold">John Doe</h3>
              <p class="text-gray-400 text-sm">CEO, CompanyName</p>
            </div>
          </div>
        </div>
        <!-- Testimonial 2 -->
        <div class="p-8 bg-gray-900 shadow-lg rounded-lg">
          <p class="text-gray-400">"We have seen a 300% increase in productivity since using this product. The support team is also top-notch!"</p>
          <div class="mt-4 flex items-center">
            <img class="w-12 h-12 rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBgCPQmyPHrOWxnUvbmQIRwOipjW8woZUreA&s" alt="User Image">
            <div class="ml-4">
              <h3 class="text-white font-semibold">Jane Smith</h3>
              <p class="text-gray-400 text-sm">COO, StartupName</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter Section -->
  <section class="py-16 bg-gray-900 text-white">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-4xl font-bold">Subscribe to Our Newsletter</h2>
      <p class="mt-4 text-gray-400">Get the latest news, updates, and special offers directly in your inbox.</p>
      <form class="mt-8 flex justify-center">
        <input type="email" placeholder="Enter your email" class="px-4 py-2 w-1/2 rounded-l-lg focus:outline-none bg-white text-black">
        <button type="submit" class="bg-blue-600 px-6 py-2 rounded-r-lg font-semibold hover:bg-blue-500 transition">Subscribe</button>
      </form>
    </div>
  </section>

  <!-- Partner Logos Section -->
  <section class="py-16 bg-gray-800">
    <div class="container mx-auto px-6">
      <h2 class="text-4xl font-bold text-center text-white">Persekutuan Kampus</h2>
      <div class="mt-12 grid grid-cols-2 md:grid-cols-6 lg:grid-cols-8 gap-8">
        <img class="mx-auto h-20" src="telkom.png" alt="Partner 1">
        <img class="mx-auto h-20" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBgCPQmyPHrOWxnUvbmQIRwOipjW8woZUreA&s" alt="Partner 2">
        <img class="mx-auto h-20" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBgCPQmyPHrOWxnUvbmQIRwOipjW8woZUreA&s" alt="Partner 3">
        <img class="mx-auto h-20" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBgCPQmyPHrOWxnUvbmQIRwOipjW8woZUreA&s" alt="Partner 4">
        <img class="mx-auto h-20" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBgCPQmyPHrOWxnUvbmQIRwOipjW8woZUreA&s" alt="Partner 5">
        <img class="mx-auto h-20" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBgCPQmyPHrOWxnUvbmQIRwOipjW8woZUreA&s" alt="Partner 3">
        <img class="mx-auto h-20" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBgCPQmyPHrOWxnUvbmQIRwOipjW8woZUreA&s" alt="Partner 4">
        <img class="mx-auto h-20" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBgCPQmyPHrOWxnUvbmQIRwOipjW8woZUreA&s" alt="Partner 5">
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-6">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Column 1 -->
        <div>
          <h3 class="text-xl font-semibold">About Us</h3>
          <p class="mt-4 text-gray-400">We are a leading company providing excellent solutions for your business.</p>
        </div>
        <!-- Column 2 -->
        <div>
          <h3 class="text-xl font-semibold">Quick Links</h3>
          <ul class="mt-4 text-gray-400">
            <li><a href="#" class="hover:text-white">Home</a></li>
            <li><a href="#" class="hover:text-white">About</a></li>
            <li><a href="#" class="hover:text-white">Services</a></li>
            <li><a href="#" class="hover:text-white">Contact</a></li>
          </ul>
        </div>
        <!-- Column 3 -->
        <div>
          <h3 class="text-xl font-semibold">Support</h3>
          <ul class="mt-4 text-gray-400">
            <li><a href="#" class="hover:text-white">Help Center</a></li>
            <li><a href="#" class="hover:text-white">FAQ</a></li>
            <li><a href="#" class="hover:text-white">Terms & Conditions</a></li>
          </ul>
        </div>
        <!-- Column 4 -->
        <div>
          <h3 class="text-xl font-semibold">Stay Connected</h3>
          <div class="mt-4 flex space-x-4">
            <a href="#" class="text-gray-400 hover:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                <path d="M22.225 0H1.775C.796 0 0 .796 0 1.775v20.451C0 23.205.796 24 1.775 24h11.045v-9.283H9.259v-3.624h3.561V8.413c0-3.525 2.134-5.444 5.282-5.444 1.501 0 2.791.112 3.164.162v3.669h-2.171c-1.703 0-2.032.81-2.032 1.995v2.616h4.066l-.53 3.624h-3.536V24h6.941C23.205 24 24 23.205 24 22.226V1.775C24 .796 23.205 0 22.225 0z" />
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                <path d="M24 4.557a9.832 9.832 0 0 1-2.828.775 4.936 4.936 0 0 0 2.165-2.724 9.868 9.868 0 0 1-3.127 1.195 4.924 4.924 0 0 0-8.39 4.49 13.978 13.978 0 0 1-10.153-5.146 4.93 4.93 0 0 0 1.523 6.574A4.904 4.904 0 0 1 .96 9.86v.063a4.924 4.924 0 0 0 3.946 4.827 4.913 4.913 0 0 1-2.217.084 4.93 4.93 0 0 0 4.604 3.42 9.868 9.868 0 0 1-6.105 2.105c-.395 0-.787-.023-1.174-.068a13.945 13.945 0 0 0 7.548 2.213c9.056 0 14.008-7.512 14.008-14.007 0-.214-.005-.427-.014-.64A10.005 10.005 0 0 0 24 4.557z" />
              </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                <path d="M21.47 0H2.53C1.134 0 0 1.134 0 2.53v18.94C0 22.866 1.134 24 2.53 24H21.47C22.866 24 24 22.866 24 21.47V2.53C24 1.134 22.866 0 21.47 0zM12 18.466a6.466 6.466 0 1 1 0-12.933 6.466 6.466 0 0 1 0 12.933zm8.196-10.694a1.509 1.509 0 1 1 0-3.018 1.509 1.509 0 0 1 0 3.018zM12 7.533a4.467 4.467 0 1 0 0 8.934 4.467 4.467 0 0 0 0-8.934z" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-12 text-center text-gray-500">
      <p>&copy; 2025 PMK Kota Surabaya. All rights reserved.</p>
    </div>
  </footer>
</body>

</html>