<form>
    <div>
      <div>
        <label>Beds</label>
        <input v-model.number="form.beds" type="text" />
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
        <input v-model="form.city" type="text" />
      </div>
  
      <div>
        <label>Post Code</label>
        <input v-model="form.code" type="text" />
      </div>
  
      <div>
        <label>Street</label>
        <input v-model="form.street" type="text" />
      </div>
  
      <div>
        <label>Street Nr</label>
        <input v-model.number="form.street_nr" type="text" />
      </div>
  
      <div>
        <label>Price</label>
        <input v-model.number="form.price" type="text" />
      </div>
  
      <div>
        <button type="submit">Create</button>
      </div>
    </div>
  </form>