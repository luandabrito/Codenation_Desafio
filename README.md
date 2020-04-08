# Codenation - Desafio

Desafio do AceleraDev - Java

Regras:
As mensagens serão convertidas para minúsculas tanto para a criptografia quanto para descriptografia.
No nosso caso os números e pontos serão mantidos, ou seja:

Normal: 1a.a

Cifrado: 1d.d

Escrever programa, em qualquer linguagem de programação, que faça uma requisição HTTP.
O resultado da requisição vai ser um JSON.
O primeiro passo é salvar o conteúdo do JSON em um arquivo com o nome answer.json, que irá usar no restante do desafio.

Deve-se usar o número de casas para decifrar o texto e atualizar o arquivo JSON, no campo decifrado. O próximo passo é gerar um resumo criptográfico do texto decifrado usando o algoritmo sha1 e atualizar novamente o arquivo JSON. OBS: pode usar qualquer biblioteca de criptografia da sua linguagem de programação favorita para gerar o resumo sha1 do texto decifrado.

O programa deve submeter o arquivo atualizado para correção via POST para a API.

OBS: a API espera um arquivo sendo enviado como multipart/form-data, como se fosse enviado por um formulário HTML, com um campo do tipo file com o nome answer. Considere isso ao enviar o arquivo.
