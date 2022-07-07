import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
    app.component('index-html-field', IndexField)
    app.component('detail-html-field', DetailField)
    app.component('form-html-field', FormField)
})
