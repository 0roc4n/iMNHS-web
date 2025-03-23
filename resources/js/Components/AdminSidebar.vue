<template>
    <div>
      <!-- Hamburger Button for Small and Medium Screens -->
      <button 
        class="lg:hidden fixed top-4 left-4 z-50 bg-blue-600 text-white p-2 rounded-md focus:outline-none"
        @click="isMobileOpen = !isMobileOpen"
      >
        <MenuIcon class="w-6 h-6" />
      </button>
  
      <!-- Sidebar -->
      <aside
        class="fixed top-0 left-0 h-screen bg-white text-black transition-all duration-300 z-40 shadow-md"
        :class="{
          'w-64': isExpanded || isMobileOpen,
          'w-20': !isExpanded && !isMobileOpen,
          '-translate-x-full': !isMobileOpen && isMobile, 
        }"
        @mouseenter="isExpanded = true"
        @mouseleave="isExpanded = false"
      >
        <div class="p-4 flex items-center space-x-2">
          <span class="text-2xl font-bold">📚</span>
          <span v-if="isExpanded || isMobileOpen" class="text-lg font-semibold">MNHS Admin</span>
        </div>
  
        <nav class="mt-4">
          <ul>
            <li v-for="item in menuItems" :key="item.name" class="group">
             <Link :href="route(item.route)"
                class="flex items-center space-x-3 p-3 text-gray-700 hover:bg-blue-700 hover:text-white transition"
              >
                <component :is="item.icon" class="w-6 h-6" />
                <span v-if="isExpanded || isMobileOpen" class="text-sm">{{ item.name }}</span>
             </Link>
            </li>
          </ul>
        </nav>
      </aside>
  
      <!-- Overlay for Mobile Sidebar -->
      <div 
        v-if="isMobileOpen" 
        class="fixed inset-0 bg-black bg-opacity-50 z-30 lg:hidden"
        @click="isMobileOpen = false"
      ></div>
    </div>
  </template>
  
  <script setup>
  import { ref, computed, onMounted, onUnmounted } from 'vue';
  import { Link } from '@inertiajs/vue3';
  import {
    HomeIcon, UsersIcon, BookOpenIcon, CheckCircleIcon,
    CreditCardIcon, BuildingLibraryIcon, ChatBubbleLeftIcon,
    CalendarIcon, Cog6ToothIcon, ClipboardDocumentListIcon, AcademicCapIcon, UserGroupIcon,
    Bars3Icon as MenuIcon
  } from '@heroicons/vue/24/outline';
  
  const isExpanded = ref(false);
  const isMobileOpen = ref(false);
  const isMobile = ref(false);
  
  // Watch screen size to determine if it's mobile
  const checkScreenSize = () => {
    isMobile.value = window.innerWidth < 1024;
  };
  
  onMounted(() => {
    checkScreenSize();
    window.addEventListener("resize", checkScreenSize);
  });
  
  onUnmounted(() => {
    window.removeEventListener("resize", checkScreenSize);
  });
  
  const menuItems = ref([
  { name: "Dashboard", icon: HomeIcon, route: "dashboard" },
  { name: "Users Management", icon: UsersIcon, route: "dashboard" },
  { name: "Student Management", icon: AcademicCapIcon  , route: "dashboard" },
  { name: "Teaching Management", icon: UserGroupIcon  , route: "dashboard" },
  { name: "Non-Teaching Management", icon: UsersIcon, route: "dashboard" },
  { name: "Classes & Subjects", icon: BookOpenIcon, route: "dashboard" },
  { name: "Attendance", icon: ClipboardDocumentListIcon, route: "dashboard" },
  { name: "Exams & Results", icon: CheckCircleIcon, route: "dashboard" },
  { name: "Fees & Payments", icon: CreditCardIcon, route: "dashboard" },
  { name: "Communication", icon: ChatBubbleLeftIcon, route: "dashboard" },
  { name: "Events & Activities", icon: CalendarIcon, route: "dashboard" },
  { name: "Settings & Reports", icon: Cog6ToothIcon, route: "dashboard" },
]);
  </script>
  
  <style>
  aside {
    overflow: hidden;
    transition: width 0.3s ease-in-out, transform 0.3s ease-in-out;
  }
  </style>
  