<template>
    <Head title="Home" />
    <div class="min-h-screen bg-gray-50">
      <!-- Navigation -->
      <GuestNav />
  
      <!-- Hero Section -->
      <div class="relative bg-blue-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24">
          <div class="lg:grid lg:grid-cols-2 lg:gap-8">
            <div>
              <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl md:text-6xl">
                <span class="block">Welcome to</span>
                <span class="block text-blue-200">Monreal National High School</span>
              </h1>
              <p class="mt-3 text-base text-blue-100 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                Modernizing traditional education through our innovative digital school management system.
                Empowering students and teachers in Monreal, Masbate.
              </p>
              <div class="mt-8 sm:flex">
                <div class="rounded-md shadow">
                  <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-blue-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                    Get Started
                  </a>
                </div>
                <div class="mt-3 sm:mt-0 sm:ml-3">
                  <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-700 hover:bg-blue-800 md:py-4 md:text-lg md:px-10">
                    Learn More
                  </a>
                </div>
              </div>
            </div>
            <div class="mt-12 lg:mt-0 flex justify-center">
              <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="/images/hero.png" alt="School illustration" class="rounded-md" />
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- Features Section -->
      <div class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="lg:text-center">
            <h2 class="text-base text-blue-600 font-semibold tracking-wide uppercase">Core Features</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
              A modern school management system
            </p>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
              iMNHS simplifies administration, enhances communication, and improves education outcomes.
            </p>
          </div>
  
          <div class="mt-10">
            <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-4">
              <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                  </svg>
                </div>
                <h3 class="mt-5 text-lg font-medium text-gray-900">Student Management</h3>
                <p class="mt-2 text-base text-gray-500">
                  Streamline enrollment processes, manage student records, and track academic performance and grades.
                </p>
              </div>
  
              <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                  </svg>
                </div>
                <h3 class="mt-5 text-lg font-medium text-gray-900">Teacher Management</h3>
                <p class="mt-2 text-base text-gray-500">
                  Organize teacher schedules, manage subject assignments, and maintain accurate salary records.
                </p>
              </div>
  
              <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                  </svg>
                </div>
                <h3 class="mt-5 text-lg font-medium text-gray-900">Class & Subject Management</h3>
                <p class="mt-2 text-base text-gray-500">
                  Efficiently organize classes, manage subject curricula, and monitor educational resources.
                </p>
              </div>
  
              <div class="bg-gray-50 p-6 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-blue-500 text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                  </svg>
                </div>
                <h3 class="mt-5 text-lg font-medium text-gray-900">Attendance Tracking</h3>
                <p class="mt-2 text-base text-gray-500">
                  Monitor student and teacher attendance with real-time tracking and comprehensive reporting.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <!-- School News Carousel -->
    <div class="bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
        <h2 class="text-3xl font-extrabold text-gray-900">
            School News & Announcements
        </h2>
        <p class="mt-4 text-lg text-gray-500">
            Stay updated with the latest happenings at Monreal National High School
        </p>
        </div>
        <div class="mt-10 relative">
        <div class="bg-white shadow-xl rounded-lg overflow-hidden">
            <!-- Carousel Navigation Dots -->
            <div class="bg-blue-600 h-16 flex items-center justify-between px-6">
            <div class="text-white font-medium">Latest News</div>
            <div class="flex space-x-3">
                <button class="h-3 w-3 rounded-full bg-white opacity-100"></button>
                <button class="h-3 w-3 rounded-full bg-white opacity-50"></button>
                <button class="h-3 w-3 rounded-full bg-white opacity-50"></button>
                <button class="h-3 w-3 rounded-full bg-white opacity-50"></button>
            </div>
            </div>
            
            <!-- Carousel Content -->
            <div class="p-6">
            <!-- Current Slide -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- News Image -->
                <div class="rounded-lg overflow-hidden h-64 bg-gray-200">
                <img src="/images/hero.png" alt="Science Fair Winners" class="w-full h-full object-cover" />
                </div>
                
                <!-- News Content -->
                <div class="flex flex-col justify-between">
                <div>
                    <div class="flex items-center text-sm text-blue-600 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>March 18, 2025</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">MNHS Students Win Regional Science Fair Competition</h3>
                    <p class="text-gray-600 mb-4">
                    Our senior students brought pride to Monreal National High School by securing first place in the Regional Science Fair with their innovative project on sustainable farming techniques appropriate for Masbate's climate and soil conditions.
                    </p>
                </div>
                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium inline-flex items-center">
                    Read full story
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                </div>
            </div>
            
            <!-- News Thumbnails -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-8">
                <div class="bg-gray-50 p-4 rounded-lg shadow-sm cursor-pointer hover:bg-blue-50 transition-colors duration-200">
                <div class="flex items-center mb-2">
                    <div class="w-12 h-12 rounded-lg bg-yellow-100 flex items-center justify-center text-yellow-500 mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    </div>
                    <h4 class="font-medium text-gray-900">School Achievements</h4>
                </div>
                <p class="text-sm text-gray-600">Academic and extracurricular successes of our students</p>
                </div>
                
                <div class="bg-gray-50 p-4 rounded-lg shadow-sm cursor-pointer hover:bg-blue-50 transition-colors duration-200">
                <div class="flex items-center mb-2">
                    <div class="w-12 h-12 rounded-lg bg-green-100 flex items-center justify-center text-green-500 mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    </div>
                    <h4 class="font-medium text-gray-900">Upcoming Events</h4>
                </div>
                <p class="text-sm text-gray-600">Calendar of important school activities and deadlines</p>
                </div>
                
                <div class="bg-gray-50 p-4 rounded-lg shadow-sm cursor-pointer hover:bg-blue-50 transition-colors duration-200">
                <div class="flex items-center mb-2">
                    <div class="w-12 h-12 rounded-lg bg-purple-100 flex items-center justify-center text-purple-500 mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                    </svg>
                    </div>
                    <h4 class="font-medium text-gray-900">Announcements</h4>
                </div>
                <p class="text-sm text-gray-600">Important notices for students, parents, and faculty</p>
                </div>
            </div>
            </div>
        </div>
        
        <!-- Carousel Controls -->
        <div class="absolute top-1/2 left-0 transform -translate-y-1/2 -translate-x-1/2">
            <button class="bg-white rounded-full p-2 shadow-md hover:bg-gray-100 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
            </button>
        </div>
        <div class="absolute top-1/2 right-0 transform -translate-y-1/2 translate-x-1/2">
            <button class="bg-white rounded-full p-2 shadow-md hover:bg-gray-100 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            </button>
        </div>
        </div>
    </div>
    </div>
  
      <!-- Testimonial -->
      <div class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="lg:grid lg:grid-cols-3 lg:gap-8">
            <div>
              <h2 class="text-3xl font-extrabold text-gray-900">
                Transforming Education in Monreal
              </h2>
              <p class="mt-4 text-lg text-gray-500">
                Our digital system has revolutionized how we manage our school, allowing teachers and administrators to focus on what matters most: quality education.
              </p>
            </div>
            <div class="mt-12 lg:mt-0 lg:col-span-2">
              <div class="bg-gray-50 p-8 rounded-lg shadow-md">
                <div class="flex items-center">
                  <div class="flex-shrink-0">
                    <div class="h-12 w-12 rounded-full bg-blue-100 flex items-center justify-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                      </svg>
                    </div>
                  </div>
                  <div class="ml-4">
                    <h4 class="text-lg font-bold text-gray-900">Sarah Castro</h4>
                    <p class="text-gray-600">Principal, Monreal National High School</p>
                  </div>
                </div>
                <p class="mt-4 text-gray-700 italic">
                  "The iMNHS system has significantly reduced our administrative workload, allowing our teachers to spend more time focusing on teaching. Student records are now organized efficiently, and we've seen marked improvements in attendance tracking and academic performance monitoring."
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
  
  
      <!-- Footer -->
      <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
          <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
            <div>
              <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                About
              </h3>
              <ul class="mt-4 space-y-4">
                <li><a href="#" class="text-base text-gray-300 hover:text-white">Our School</a></li>
                <li><a href="#" class="text-base text-gray-300 hover:text-white">Mission & Vision</a></li>
                <li><a href="#" class="text-base text-gray-300 hover:text-white">History</a></li>
                <li><a href="#" class="text-base text-gray-300 hover:text-white">Administration</a></li>
              </ul>
            </div>
            <div>
              <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                Resources
              </h3>
              <ul class="mt-4 space-y-4">
                <li><a href="#" class="text-base text-gray-300 hover:text-white">User Guides</a></li>
                <li><a href="#" class="text-base text-gray-300 hover:text-white">Training Videos</a></li>
                <li><a href="#" class="text-base text-gray-300 hover:text-white">FAQ</a></li>
                <li><a href="#" class="text-base text-gray-300 hover:text-white">Support</a></li>
              </ul>
            </div>
            <div>
              <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                Legal
              </h3>
              <ul class="mt-4 space-y-4">
                <li><a href="#" class="text-base text-gray-300 hover:text-white">Privacy</a></li>
                <li><a href="#" class="text-base text-gray-300 hover:text-white">Terms</a></li>
                <li><a href="#" class="text-base text-gray-300 hover:text-white">Cookie Policy</a></li>
              </ul>
            </div>
            <div>
              <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                Contact
              </h3>
              <ul class="mt-4 space-y-4">
                <li class="flex">
                  <span class="text-gray-300">Monreal, Masbate, Philippines</span>
                </li>
                <li class="flex">
                  <span class="text-gray-300">info@mnhs.edu.ph</span>
                </li>
                <li class="flex">
                  <span class="text-gray-300">(+63) 912-345-6789</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="mt-12 border-t border-gray-700 pt-8">
            <p class="text-base text-gray-400 text-center">
              © 2025 Monreal National High School. All rights reserved.
            </p>
          </div>
        </div>
      </footer>
    </div>
  </template>
  
  <script setup>
import GuestNav from '@/Components/GuestNav.vue';
import { Head } from '@inertiajs/vue3';

  </script>s