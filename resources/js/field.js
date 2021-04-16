Nova.booting((Vue, router, store) => {
  Vue.component('index-html-field', require('./components/IndexField'))
  Vue.component('detail-html-field', require('./components/DetailField'))
  Vue.component('form-html-field', require('./components/FormField'))
})
