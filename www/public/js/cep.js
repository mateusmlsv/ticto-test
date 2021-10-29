const cep = {
    getCEP(cep) {
        return fetch(`https://cep.awesomeapi.com.br/json/${cep}`)
            .then(response => {
                response.json().
                then(data => this.setDataInAddressFields(data))
            }).catch(e => console.log(e.message));
    },

    setDataInAddressFields(data) {
        if (data.status != 404) {
            for (const field in data) {
                if (document.querySelector(`input[name=${field}]`)) {
                    document.querySelector(`input[name=${field}]`).value = data[field];
                }
            }
            document.querySelector('input[name=address_number]').focus();
        }
    }
}

document.querySelector("input[name=cep]").addEventListener("blur", (e) => {
    let search = e.target.value.replace('-', '');
    cep.getCEP(search);
}, true);
