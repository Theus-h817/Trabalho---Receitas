function preview() {
    let file_foto = document.querySelector('#foto').files[0];
    let img_imagem = document.querySelector('#imagem');


    // faz a leitura da imagem
    let visualizacao = new FileReader();

    if (file_foto) {
        // esse comando dispara o evento load da 
        // imagem quando ela for lida completamente            
        visualizacao.readAsDataURL(file_foto);
    } else {
        img_imagem.src = "";
    }

    // evento de load quando disparada carrega a imagem da variável visualizacao
    visualizacao.onloadend = function() {
        img_imagem.src = visualizacao.result;
    }
}