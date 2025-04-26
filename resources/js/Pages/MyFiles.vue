<template>
    <AuthenticatedLayout>
        <table class="min-w-full">
          <thead class="bg-gray-100 border-b">
            <tr>
              <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Name
              </th>
              <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Owner
              </th>
              <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Last Modified
              </th>
              <th class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Size
              </th>
            </tr>
          </thead>
          <tbody>
            
          </tbody>
        </table>
    </AuthenticatedLayout>
</template>

<script setup>
  //Imports
  import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';

  //Props & Emit
  const {files} = defineProps({
    files: Object
  })
</script>