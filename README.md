👩‍💻 Autora

Vitória Gabriela Fernandes da Luz
GitHub: https://github.com/vitoriagabriela2512

📖 Descrição

Este projeto tem como objetivo processar e organizar dados de um cliente, gerando um relatório completo com informações pessoais e estatísticas de compras.

O sistema foi desenvolvido em PHP, utilizando manipulação de strings, arrays e datas, além de exibição dinâmica em HTML.

🎯 Objetivo

Aplicar conceitos fundamentais de PHP, como:

Tratamento de dados
Manipulação de strings
Uso de arrays
Cálculos estatísticos
Trabalhar com datas (idade)
Exibição de informações formatadas
🧠 Lógica Utilizada

O sistema realiza as seguintes etapas:

🔹 Tratamento de Dados:
Remove espaços extras do nome (trim)
Converte texto para minúsculo (strtolower)
Formata o nome corretamente (ucwords)
Padroniza o email
🔹 Manipulação de Compras:
Converte string em array (explode)
Calcula:
Total de compras
Soma dos valores (array_sum)
Maior compra (max)
Menor compra (min)
Média de gastos
🔹 Cálculo de Idade:
Utiliza DateTime
Calcula a diferença entre a data atual e a data de nascimento
🏗️ Estrutura do Projeto
│Desafio3-PHP
├── exemplo2    # Código principal com processamento e interface
└── README.md     # Documentação do projeto
💻 Como Executar
Instale o XAMPP (ou outro servidor local)

Coloque a pasta do projeto em:

C:\xampp\htdocs
Inicie o Apache
Acesse no navegador:
http://localhost/Desafio3-PHP
📊 Funcionalidades
Exibe:
Nome formatado
Email padronizado
Idade do cliente
Gera estatísticas:
Total de pedidos
Valor total gasto
Média por compra
Maior compra
Menor compra
Mostra data e hora do relatório
🖥️ Interface

O sistema possui:

Layout simples e organizado
Estilo moderno com CSS
Separação clara entre dados e estatísticas
Destaque visual para valores importantes
📌 Exemplo de Resultado
Entrada:
Nome: "josé da silva"
Compras: 120.50, 80.00, 15.75, 250.00, 99.90
Saída:
Nome formatado: José Da Silva
Total gasto: R$ 566,15
Média: R$ 113,23
Maior compra: R$ 250,00
Menor compra: R$ 15,75
🎨 Tecnologias Utilizadas
HTML5
CSS3
PHP
⚠️ Observações
Os dados são simulados (fixos no código)
O sistema demonstra boas práticas de organização e processamento
Ideal para aprendizado de manipulação de dados em PHP
🚀 Considerações Finais

Este projeto demonstra como transformar dados brutos em informações úteis, aplicando conceitos essenciais de programação em PHP de forma prática e organizada.
