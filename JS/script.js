function adicionarCarrinho(nome, preco) {
  fetch("adicionar_carrinho.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify({
      nome: nome,
      preco: Number(preco)
    })
  })
    .then((resposta) => resposta.json())
    .then((dados) => {
      if (dados.sucesso) {
        alert("${nome}" adicionado à cesta!);
      } else {
        alert("Não foi possível adicionar o item.");
      }
    })
    .catch(() => {
      alert("Erro ao comunicar com o servidor.");
    });
}


