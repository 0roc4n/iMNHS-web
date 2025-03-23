<template>
    <div>
      <svg 
        class="w-full h-full" 
        :viewBox="`0 0 ${width} ${height}`" 
        xmlns="http://www.w3.org/2000/svg"
      >
        <!-- Grid Lines -->
        <g class="grid-lines">
          <line
            v-for="(_, index) in 5"
            :key="`grid-${index}`"
            :x1="padding"
            :y1="height - padding - (index * (height - 2 * padding) / 4)"
            :x2="width - padding"
            :y2="height - padding - (index * (height - 2 * padding) / 4)"
            stroke="#e5e7eb"
            stroke-width="1"
          />
        </g>
        
        <!-- X Axis -->
        <line 
          :x1="padding" 
          :y1="height - padding" 
          :x2="width - padding" 
          :y2="height - padding" 
          stroke="#9ca3af" 
          stroke-width="2"
        />
        
        <!-- X Axis Labels -->
        <text 
          v-for="(label, index) in chartData.labels" 
          :key="`x-label-${index}`"
          :x="padding + index * xStep"
          :y="height - padding/2"
          text-anchor="middle"
          font-size="12"
          fill="#6b7280"
        >
          {{ label }}
        </text>
        
        <!-- Y Axis -->
        <line 
          :x1="padding" 
          :y1="padding" 
          :x2="padding" 
          :y2="height - padding" 
          stroke="#9ca3af" 
          stroke-width="2"
        />
        
        <!-- Y Axis Labels -->
        <text 
          v-for="(_, index) in 5"
          :key="`y-label-${index}`"
          :x="padding - 10"
          :y="height - padding - (index * (height - 2 * padding) / 4) + 5"
          text-anchor="end"
          font-size="12"
          fill="#6b7280"
        >
          {{ index * 25 }}%
        </text>
        
        <!-- Lines -->
        <g v-for="(dataset, datasetIndex) in chartData.datasets" :key="`dataset-${datasetIndex}`">
          <polyline
            :points="getLinePoints(dataset.data, datasetIndex)"
            fill="none"
            :stroke="datasetIndex === 0 ? '#3b82f6' : '#10b981'"
            stroke-width="3"
          />
          
          <!-- Data Points -->
          <circle
            v-for="(value, index) in dataset.data"
            :key="`point-${datasetIndex}-${index}`"
            :cx="padding + index * xStep"
            :cy="height - padding - ((value - minValue) / valueRange) * (height - 2 * padding)"
            r="4"
            :fill="datasetIndex === 0 ? '#3b82f6' : '#10b981'"
          />
        </g>
        
        <!-- Legend -->
        <g class="legend" transform="translate(50, 20)">
          <circle cx="0" cy="0" r="4" fill="#3b82f6" />
          <text x="10" y="4" font-size="12" fill="#6b7280">{{ chartData.datasets[0].name }}</text>
          
          <circle cx="120" cy="0" r="4" fill="#10b981" />
          <text x="130" y="4" font-size="12" fill="#6b7280">{{ chartData.datasets[1].name }}</text>
        </g>
      </svg>
    </div>
  </template>
  
  <script setup>
  import { computed } from 'vue';
  
  // Props
  const props = defineProps({
    chartData: {
      type: Object,
      required: true
    }
  });
  
  // Chart dimensions
  const width = 800;
  const height = 400;
  const padding = 60;
  
  // Calculate the step size for X axis
  const xStep = computed(() => {
    return (width - 2 * padding) / (props.chartData.labels.length - 1);
  });
  
  // Find min and max values for Y axis scaling
  const allValues = computed(() => {
    return props.chartData.datasets.flatMap(dataset => dataset.data);
  });
  
  const minValue = computed(() => {
    return Math.min(...allValues.value) > 0 ? 0 : Math.min(...allValues.value);
  });
  
  const maxValue = computed(() => {
    return Math.max(...allValues.value) < 100 ? 100 : Math.ceil(Math.max(...allValues.value) / 10) * 10;
  });
  
  const valueRange = computed(() => {
    return maxValue.value - minValue.value;
  });
  
  // Generate polyline points for each dataset
  const getLinePoints = (data, datasetIndex) => {
    return data.map((value, index) => {
      const x = padding + index * xStep.value;
      const y = height - padding - ((value - minValue.value) / valueRange.value) * (height - 2 * padding);
      return `${x},${y}`;
    }).join(' ');
  };
  </script>