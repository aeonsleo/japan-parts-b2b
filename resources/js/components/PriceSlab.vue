<template>
    <div>
        <div class="row">
            <div class="col-2">
                <label for="" class="form-label">Add Price Slab</label>
            </div>
            <div class="col-1">
                <label for="" class="form-label">From units</label>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <select
                        name="from_units"
                        id="from_units"
                        v-model="fromUnits"
                        class="form-select"
                    >
                        <option v-for="option in fromUnitsOptions" :key="option" :value="option">{{ option }}</option>
                    </select>
                </div>
            </div>
            <div class="col-1">
                <label for="" class="form-label">To units</label>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <select v-model="toUnits" name="to_units" id="to_units" class="form-select">
                        <option v-for="option in toUnitsOptions" :key="option" :value="option">{{ option }}</option>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <button
                    id="add-price-slab"
                    type="button"
                    @click="addPriceSlab"
                    class="btn btn-success btn-sm"
                >
                    <b>Add</b>
                </button>
            </div>
        </div>

        <div class="row" v-for="(priceSlab, index) in priceSlabs" :key="index">
            <div class="col-3">
                <label for="input_price" class="form-label">Price</label>
            </div>
            <div class="col-3">
                <div class="mb-3">
                    <input
                        type="text"
                        name="input_price[]"
                        class="form-control"
                        value=""
                    />
                </div>
            </div>
            <div class="col-6" id="price-slabs">
                <input type="hidden" :value="priceSlab.fromUnits" name="units_from[]">
                <input type="hidden" :value="priceSlab.toUnits" name="units_to[]">
                <div>
                    Price Slab: {{ priceSlab.fromUnits }} - {{ priceSlab.toUnits }} units &emsp;<button
                        type="button"
                        id="del-slab"
                        class="btn btn-sm btn-danger"
                        @click="deletePriceSlab(index)"
                    >
                        Del
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      unitsRange: 50,
      fromUnitsOptions: [],
      priceSlabs:[],
      fromUnits:0,
      toUnits:0,
      price:0
    }
  },

  computed: {
    toUnitsOptions: function() {
      return this.fromUnitsOptions.slice(this.fromUnits, this.unitsRange);
    }
  },

  created() {
    this.fromUnitsOptions = this.setArrayRange();

  },

  methods: {

    setArrayRange() {
      var foo = [];
      for (var i = 1; i <= this.unitsRange; i++) {
          foo.push(i);
      }
      return foo;
    },

    addPriceSlab() {
      const slab = {
        fromUnits: this.fromUnits,
        toUnits: this.toUnits,
        price: this.price
      }

      if(!this.validateSlab(slab)) {
        return false;
      }

      if(this.checkExclusiveSlabs(slab)) {
        this.priceSlabs.push(slab);
      } else {
        alert('Price Slabs Overlap!');
      }

    },

    deletePriceSlab(index){
      this.priceSlabs.splice(index, 1);
    },

    changedFromUnits() {
      this.toUnitsOptions =  this.fromUnitsOptions.slice(this.fromUnits, 10 - this.fromUnits);
    },

    validateSlab(slab) {
      if(!slab.fromUnits || !slab.toUnits) {
        return false;
      }

      if(slab.fromUnits >= slab.toUnits) {
        return false;
      }

      return true;
    },

    checkExclusiveSlabs(slab) {
      var exclusive = true;
      this.priceSlabs.forEach(priceSlab => {
        if(slab.fromUnits >= priceSlab.fromUnits && slab.fromUnits <= priceSlab.toUnits) {
          exclusive = false;
        } 
        if(slab.toUnits >= priceSlab.fromUnits && slab.toUnits <= priceSlab.toUnits) {
          exclusive = false;
        }
        if(slab.fromUnits <= priceSlab.fromUnits && slab.toUnits >= priceSlab.toUnits) {
          exclusive = false;
        }
      });

      return exclusive;
    },

  }
};
</script>

<style></style>
