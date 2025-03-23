<template>

    <Head title="Student Profile" />
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="container mx-auto px-4 py-6">
                            <!-- Page Header -->
                            <header class="mb-8">
                                <h1 class="text-3xl font-bold text-gray-900">Student Dashboard</h1>
                                <p class="text-gray-600 mt-2">Manage and monitor student performance</p>
                            </header>

                            <!-- Stats Cards -->
                            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
                                <div class="bg-white rounded-lg shadow p-4 border border-gray-200">
                                    <h3 class="text-gray-500 text-sm font-medium">Total Students</h3>
                                    <p class="text-2xl font-bold">{{ students.length }}</p>
                                    <p class="text-green-600 text-sm mt-1">+2.5% from last month</p>
                                </div>
                                <div class="bg-white rounded-lg shadow p-4 border border-gray-200">
                                    <h3 class="text-gray-500 text-sm font-medium">Average Grade</h3>
                                    <p class="text-2xl font-bold">{{ averageGrade }}%</p>
                                    <p class="text-green-600 text-sm mt-1">+1.2% from last semester</p>
                                </div>
                                <div class="bg-white rounded-lg shadow p-4 border border-gray-200">
                                    <h3 class="text-gray-500 text-sm font-medium">Attendance Rate</h3>
                                    <p class="text-2xl font-bold">94%</p>
                                    <p class="text-red-600 text-sm mt-1">-0.8% from last month</p>
                                </div>
                                <div class="bg-white rounded-lg shadow p-4 border border-gray-200">
                                    <h3 class="text-gray-500 text-sm font-medium">Active Courses</h3>
                                    <p class="text-2xl font-bold">12</p>
                                    <p class="text-gray-600 text-sm mt-1">Same as last semester</p>
                                </div>
                            </div>

                            <!-- Stats Chart -->
                            <!-- <div class="bg-white rounded-lg shadow p-6 mb-8 border border-gray-200">
                                <h2 class="text-xl font-semibold mb-4">Performance Analytics</h2>
                                <div class="h-64">
                                    <PerformanceChart :chartData="performanceData" />
                                </div>
                            </div> -->

                            <!-- Student List Section -->
                            <div class="bg-white rounded-lg shadow border border-gray-200">
                                <div class="p-6 border-b border-gray-200">
                                    <div class="flex justify-between items-center">
                                        <h2 class="text-xl font-semibold">Student List</h2>
                                        <div class="flex space-x-2">
                                            <div class="relative">
                                                <input type="text" placeholder="Search students..."
                                                    v-model="searchQuery"
                                                    class="border rounded-md py-2 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                                <button class="absolute right-2 top-2.5 text-gray-400">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="relative">
                                                <select v-model="selectedGradeLevel"
                                                        class="border rounded-md py-2 px-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 mr-2">
                                                    <option value="all">All Grade Levels</option>
                                                    <option v-for="level in uniqueGradeLevels" :key="level" :value="level">
                                                        Grade {{ level }}
                                                    </option>
                                                </select>
                                            </div>
                                            <button
                                                class="bg-blue-600 text-white px-4 py-2 rounded-md text-sm hover:bg-blue-700">
                                                Add Student
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Table -->
                                <div class="overflow-x-auto">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Student ID
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Student
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    ID
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Grade Level
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Section
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Status
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <tr v-for="student in paginatedStudents" :key="student.id"
                                                class="hover:bg-gray-50">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">{{ student.student_id }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="h-10 w-10 flex-shrink-0">
                                                            <img class="h-10 w-10 rounded-full" :src="student.avatar"
                                                                alt="" />
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">{{
                                                                student.name }}</div>
                                                            <div class="text-sm text-gray-500">{{ student.first_name }} {{ student.middle_name }} {{ student.last_name }}</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">{{ student.lrn }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">{{ student.grade_level }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">{{ student.section }}</div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span
                                                        :class="`px-2 inline-flex text-xs leading-5 font-semibold rounded-full ${getStatusClass(student.status)}`">
                                                        {{ student.status }}
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                    <button class="text-blue-600 hover:text-blue-800 mr-3">Edit</button>
                                                    <button class="text-red-600 hover:text-red-800">Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Pagination -->
                                <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
                                    <div class="text-sm text-gray-700">
                                        Showing <span class="font-medium">{{ (currentPage - 1) * itemsPerPage + 1 }}</span> to 
                                        <span class="font-medium">{{ Math.min(currentPage * itemsPerPage, filteredStudents.length) }}</span> of 
                                        <span class="font-medium">{{ filteredStudents.length }}</span> results
                                    </div>
                                    <div class="flex space-x-2">
                                        <button @click="handlePageChange(currentPage - 1)" 
                                                :disabled="currentPage === 1"
                                                :class="{'opacity-50 cursor-not-allowed': currentPage === 1}"
                                                class="px-3 py-1 border rounded text-sm text-gray-700">
                                            Previous
                                        </button>
                                        <button v-for="page in pageNumbers" 
                                                :key="page"
                                                @click="handlePageChange(page)"
                                                :class="[
                                                    'px-3 py-1 rounded text-sm',
                                                    currentPage === page 
                                                        ? 'bg-blue-600 text-white' 
                                                        : 'border text-gray-700'
                                                ]">
                                            {{ page }}
                                        </button>
                                        <button @click="handlePageChange(currentPage + 1)"
                                                :disabled="currentPage === totalPages"
                                                :class="{'opacity-50 cursor-not-allowed': currentPage === totalPages}"
                                                class="px-3 py-1 border rounded text-sm text-gray-700">
                                            Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import AdminSidebar from '@/Components/AdminSidebar.vue';
import { ref, computed } from 'vue';
import PerformanceChart from '@/Components/PerformanceChart.vue';

// Define props to receive data from controller
const props = defineProps({
    students: {
        type: Array,
        required: true
    }
});

// Convert props.students to ref for reactivity
const students = ref(props.students);

// Performance data for the chart
const performanceData = {
  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
  datasets: [
    {
      name: 'Average Grade',
      data: [82, 84, 83, 86, 88, 85]
    },
    {
      name: 'Attendance Rate',
      data: [92, 93, 91, 94, 93, 92]
    }
  ]
};

// Search functionality
const searchQuery = ref('');
const selectedGradeLevel = ref('all');

const uniqueGradeLevels = computed(() => {
    const levels = [...new Set(students.value.map(student => student.grade_level))];
    return levels.sort((a, b) => a - b);
});

// Updated search and filter functionality
const filteredStudents = computed(() => {
    let filtered = students.value;
    
    // Grade level filter
    if (selectedGradeLevel.value !== 'all') {
        filtered = filtered.filter(student => 
            student.grade_level === selectedGradeLevel.value
        );
    }
    
    // Search filter
    if (searchQuery.value) {
        const query = searchQuery.value.toLowerCase();
        filtered = filtered.filter(student => 
            student.first_name?.toLowerCase().includes(query) || 
            student.middle_name?.toLowerCase().includes(query) || 
            student.last_name?.toLowerCase().includes(query) || 
            student.student_id?.toString().includes(query) ||
            student.lrn?.toString().includes(query) ||
            student.section?.toLowerCase().includes(query)
        );
    }
    
    return filtered;
});

// Calculate average grade
const averageGrade = computed(() => {
  const total = students.value.reduce((sum, student) => sum + student.grade, 0);
  return Math.round(total / students.value.length);
});

// Get status class for styling
const getStatusClass = (status) => {
  switch(status) {
    case 'Active':
      return 'bg-green-100 text-green-800';
    case 'Probation':
      return 'bg-yellow-100 text-yellow-800';
    case 'At Risk':
      return 'bg-red-100 text-red-800';
    default:
      return 'bg-gray-100 text-gray-800';
  }
};

// Pagination
const currentPage = ref(1);
const itemsPerPage = ref(10);

const paginatedStudents = computed(() => {
    const startIndex = (currentPage.value - 1) * itemsPerPage.value;
    const endIndex = startIndex + itemsPerPage.value;
    return filteredStudents.value.slice(startIndex, endIndex);
});

const totalPages = computed(() => 
    Math.ceil(filteredStudents.value.length / itemsPerPage.value)
);

const pageNumbers = computed(() => {
    const pages = [];
    for (let i = 1; i <= totalPages.value; i++) {
        pages.push(i);
    }
    return pages;
});

const handlePageChange = (page) => {
    if (page >= 1 && page <= totalPages.value) {
        currentPage.value = page;
    }
};
</script>