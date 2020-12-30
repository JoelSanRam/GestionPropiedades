$(document).ready(function(){
        $('.btnSubmit').click(function(e){
            
            e.preventDefault();
            
            var error = false;
            var tipo = $('#tipo').val();
            var granja = $('#granja').val();
			var estatus = $('#estatus').val();
            var nombre_corto = $('#nombre_corto').val();
            var propietario = $('#propietario').val();
            var entidad_federativa = $('#entidad_federativa').val();
            var codigo_postal = $('#codigo_postal').val();
            var superficie_terreno = $('#superficie_terreno').val();
            var valor_comercial = $('#valor_comercial').val();
            var valor_catastral = $('#valor_catastral').val();
            var coordenadas = document.getElementById('coordenadas');
            var pdf = document.getElementById('pdf');
            var dwg = document.getElementById('dwg');
            var images = document.getElementById('images');
			
            
            if(tipo.length == 0){
                var error = true;
                $('#tipo').addClass("is-invalid");
                location.href = "#step-1";
            }else{
                $('#tipo').removeClass("is-invalid");
            }
            if(granja.length == 0){
                var error = true;
                $('#granja').addClass("is-invalid");
                location.href = "#step-1";
            }else{
                $('#granja').removeClass("is-invalid");
                location.href = "#step-1";
            }
			if(estatus.length == 0){
                var error = true;
                $('#estatus').addClass("is-invalid");
                location.href = "#step-1";
            }else{
                $('#estatus').removeClass("is-invalid");
            }
            if(nombre_corto.length == 0){
                var error = true;
                $('#nombre_corto').addClass("is-invalid");
                location.href = "#step-1";
            }else{
                $('#nombre_corto').removeClass("is-invalid");
            }

            if(propietario.length == 0){
                var error = true;
                $('#propietario').addClass("is-invalid");
                location.href = "#step-1";
            }else{
                $('#propietario').removeClass("is-invalid");
            }

            if(entidad_federativa.length == 0){
                var error = true;
                $('#entidad_federativa').addClass("is-invalid");
                location.href = "#step-1";
            }else{
                $('#entidad_federativa').removeClass("is-invalid");
            }

            if(codigo_postal.length == 0){
                var error = true;
                $('#codigo_postal').addClass("is-invalid");
                location.href = "#step-2";
            }else{
                $('#codigo_postal').removeClass("is-invalid");
            }

            if(superficie_terreno.length == 0){
                var error = true;
                $('#superficie_terreno').addClass("is-invalid");
                location.href = "#step-3";
            }else{
                $('#superficie_terreno').removeClass("is-invalid");
            }

            if(valor_comercial.length == 0){
                var error = true;
                $('#valor_comercial').addClass("is-invalid");
                location.href = "#step-4";
            }else{
                $('#valor_comercial').removeClass("is-invalid");
            }

            if(valor_catastral.length == 0){
                var error = true;
                $('#valor_catastral').addClass("is-invalid");
                location.href = "#step-4";
            }else{
                $('#valor_catastral').removeClass("is-invalid");
            }

            if(coordenadas.files.length == 0){
                var error = true;
                $('#coordenadas').addClass("is-invalid");
                location.href = "#step-5";
            }else{
                $('#coordenadas').removeClass("is-invalid");
            }

            if(pdf.files.length == 0){
                var error = true;
                $('#pdf').addClass("is-invalid");
                location.href = "#step-6";
            }else{
                $('#pdf').removeClass("is-invalid");
            }

            if(dwg.files.length == 0){
                var error = true;
                $('#dwg').addClass("is-invalid");
                location.href = "#step-6";
            }else{
                $('#dwg').removeClass("is-invalid");
            }

            if(images.files.length == 0){
                var error = true;
                $('#images').addClass("is-invalid");
                location.href = "#step-7";
            }else{
                $('#images').removeClass("is-invalid");
            }
            

            if(error == false){

                $('.btnSubmit').attr({'disabled' : 'true' });
                
                let form_coordenada = new FormData(document.getElementById("form-coordenada"));
                let form_archivo = new FormData(document.getElementById("form-archivo"));
                let form_image = new FormData(document.getElementById("form-image"));

                $.ajax({
                    url: "create/save/propiedad",
                    type: "POST",
                    dataType: 'json',
                    data: $('#form-propiedad').serialize(),
                    success: function (data) {
                        console.log(data)
                    },
                    error: function (data) {
                        console.log(data)
                    }
                });

                ////////
                $.ajax({
                    url: "create/save/ubicacion",
                    type: "POST",
                    dataType: 'json',
                    data: $('#form-ubicacion').serialize(),
                    success: function (data) {
                        console.log(data)
                    },
                    error: function (data) {
                        console.log(data)
                    }
                });

                ////////
                $.ajax({
                    url: "create/save/dimencion",
                    type: "POST",
                    dataType: 'json',
                    data: $('#form-dimencion').serialize(),
                    success: function (data) {
                        console.log(data)
                    },
                    error: function (data) {
                        console.log(data)
                    }
                });

                ////////
                $.ajax({
                    url: "create/save/valor",
                    type: "POST",
                    dataType: 'json',
                    data: $('#form-valor').serialize(),
                    success: function (data) {
                        console.log(data)
                    },
                    error: function (data) {
                        console.log(data)
                        /*$('#errors').removeClass("d-none");*/
                    }
                });

                ////////
                $.ajax({
                    url: "create/save/coordenada",
                    type: "POST",
                    dataType: 'json',
                    data: form_coordenada,
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        console.log(data)
                    },
                    error: function (data) {
                        console.log(data)
                    }
                });

                ////////
                $.ajax({
                    url: "create/save/archivo",
                    type: "POST",
                    dataType: 'json',
                    data: form_archivo,
                    processData: false,
                    contentType: false,
                    success: function (data) {
                        console.log(data)
                    },
                    error: function (data) {
                        console.log(data)
                    }
                });

                ////////
                $.ajax({
                    url: "create/save/image",
                    type: "POST",
                    dataType: 'json',
                    data: form_image,
                    processData: false,
                    contentType: false, 
                    success: function (data) {
                        console.log(data)
                    },
                    error: function (data) {
                        console.log(data)                }
                });
            }
        });    
    });