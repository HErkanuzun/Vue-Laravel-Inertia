<template>
  <div></div>
    <form @submit.prevent="create">
      <div>
        <div>
          <label>Beds</label>
          <input v-model.number="form.beds" type="text" />
          <div v-if="form.errors.beds">
            {{ form.errors.beds }}
          </div>
        </div>
  
        <div>
          <label>Baths</label>
          <input v-model.number="form.baths" type="text" />
        </div>
  
        <div>
          <label>Area</label>
          <input v-model.number="form.area" type="text" />
        </div>
  
        <div>
          <label>City</label>
          <input v-model.number="form.city" type="text" />
        </div>
  
        <div>
          <label>Post Code</label>
          <input v-model.number="form.code" type="text" />
        </div>
  
        <div>
          <label>Street</label>
          <input v-model.street="form.street" type="text" />
        </div>
  
        <div>
          <label>Street Nr</label>
          <input v-model.street_nr="form.street_nr" type="text" />
        </div>
  
        <div>
          <label>Price</label>
          <input v-model.price="form.price" type="text" />
        </div>
  
        <div>
          <button type="submit">Create</button>
        </div>
      </div>
    </form>
  </template>
  <script setup>

  import { useForm } from '@inertiajs/vue3';
  import { usePage } from '@inertiajs/vue3';
    const form = useForm({
        beds: 0,
        baths:0,
        area:0,
        city:null,
        street:null,
        street_nr:null,
        code:null,
        price:0,
    })
    
    const page = usePage();
    
    const create = () => form.post('/listing')

    const x = form.beds
  </script>

  <style scoped>
  label {
    margin-right: 2em;
  }
  
  div {
    padding: 2px
  }
  </style>