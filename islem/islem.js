var Vue = new Vue({
    el: "#app",
    data: {
        okulArray:[],
        bolumArray:[],
        okul:"",
        bolum:""
    },
    methods: {
        async formDataDoldur(entity) {
            var form_data = new FormData();
            for (var key in entity) {
                form_data.append(key, entity[key]);
            }
            return await form_data;
        },
        async FormSifirla(){
            await $("input[name*='Ad']").val("");
            await $("input[name*='Soyad']").val("");
            await $("input[name*='Telefon']").val("");
            await $("input[name*='Email']").val("");
            await this.OkullariGetir();
            await this.BolumlariGetir();
        },
        async OgrenciEkle(event) {
            var entity = await Object.fromEntries(new FormData(event.target));
            console.log(entity)
            let formData = await this.formDataDoldur(entity);
            formData.append('ogrenciekle',true)
            await fetch(`http://localhost/PhpCase/islem/islem.php`,
                {
                    method: 'POST',
                    body: formData,
                }
            )
            this.FormSifirla();
        },
        async OkullariGetir() {
            let formData = new FormData();
            formData.append('okulcek',true)
            await fetch(`http://localhost/PhpCase/islem/islem.php`,
                {
                    method: 'POST',
                    body: formData,
                }
            ).then((response) => {
                return response.json();
            })
            .then((data) => {
                if (data.length > 0) {
                    this.okulArray = data;
                    this.okul = data[0].Id;
                }
                else {
                    this.okulArray = null
                }
            });
        },
        async BolumlariGetir() {
            let formData = new FormData();
            formData.append('bolumcek',true)
            await fetch(`http://localhost/PhpCase/islem/islem.php`,
                {
                    method: 'POST',
                    body: formData,
                }
            ).then((response) => {
                return response.json();
            })
            .then((data) => {
                if (data.length > 0) {
                    this.bolumArray = data;
                    this.bolum = data[0].Id;
                }
                else {
                    this.bolumArray = null
                }
            });
        }
    },
    async created() {
       await this.OkullariGetir();
       await this.BolumlariGetir();
    },
    async befourupdate() {
        await this.OkullariGetir();
        await this.BolumlariGetir();
    }
});