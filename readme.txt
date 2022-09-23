Integrantes: Raphael Campos Silva e Izabela Nogueira Dias

ORIENTAÇÕES PARA UTILIZAR O NOSSO PROJETO

Nosso projeto é um sistema acadêmico de cadastro e consulta de alunos, professores e fornecedores.

1º Para executar este projeto é necessário ter um software (servidor de desenvolvimento local), como o XAMPP ou WAMP (UwAmp), para os nossos testes foram executados no XAMPP. Também é preciso de um editor de código-fonte, usamos o Visual Studio Code, banco de dados, optamos pelo MySQL e por fim um navegador.

2º Ative o servidor Apache no XAMPP ou em outro software desse mesmo tipo.

3º Baixe todos os arquivos que encontram-se na branch Master deste presente repositório. Salve eles em uma pasta localizada dentro da pasta do software utilizado. Ex. no nosso caso usamos o Xampp então estes arquivos estão salvos em uma pasta dentro do arquivo do xampp, mais especificamente na pasta "htdocs". Então o endereço da pasta com nossos arquivos (no meu computador) é "C:\xampp\htdocs\teste_pi"; Obs.: os arquivos são: formulario_aluno, formulario_professor, formulario_fornecedor, config_pi, consulta_aluno, consulta_professor, consulta_fornecedor, menu e menu_consulta.

4º Depois de baixar todos os arquivos presentes na branch Master e também ativar o Apache abra um navegador de sua escolha.

5º No navegar digite a url localhost/nome_da_pasta_que_salvou_todos_os_projetos. Ex.: No nosso caso a url que utiliza foi http://localhost/teste_pi/ Obs.: perceba que o final da url é o mesmo do nome da pasta que foi salvo no arquivo http://localhost/teste_pi/ e "C:\xampp\htdocs\teste_pi"

6º Aparecerá uma tela com todos os arquivos presentes na pasta escolhida. Ex.: No nosso projeto a pasta é teste_pi e têm os seguintes arquivos formulario_aluno, formulario_professor, formulario_fornecedor, config_pi, consulta_aluno, consulta_professor, consulta_fornecedor, menu e menu_consulta.

7º Selecione o arquivo "menu", será aberto a página inicial do nosso projeto. Lá você pode navegar entre as páginas de Cadastro do Aluno, Professor, Fornecedor. E também poderá realizar a consulta desses cadastros, porém para realizar esta consulta é preciso ter acesso ao banco de dados. Porém o nosso principal objetivo era fazer as telas de cadastros. Obs. 1: Se você quiser utilizar a parte de consulta é necessário montar o banco de dados, com os dados presentes nos arquivos (formulario_aluno, formulario_professor, formulario_fornecedor, config_pi), sugiro utilizar o MySQL, foi o que o nosso grupo utilizou. Para Aluno: nome da tabela (tabela_aluno) e colunas (nome,cpf,email,telefone,sexo,data_nasc,cep,endereco,curso,banco,agencia,conta) Professor: nome da tabela (tabela_professor) colunas (nome,cpf,email,telefone,sexo,data_nasc,cep,endereco,formacao,banco,agencia,conta) Fornecedor: nome da tabela (tabela_fornecedor) e colunas (nomeEmpresa,cnpj,email,telefone,areaAtuacao,cep,endereco,banco,agencia,conta) Obs. 2: Não sei se é possível, mas também posso deixar o meu banco de dados conectados durante o dia, para assim realizar tanto o cadastro como a consulta, pois estou enviando o projeto com a senha do banco dados que utilizamos, pois pode ser uma das opções para demonstrar nosso projeto por completo. Obs. 3: No arquivo config_pi, tem os dados para conectar o banco de dados com os algoritmos

8º Selecione um ou mais dos cadastros (Aluno, Professor ou Fornecedor) preencha eles e clique em enviar.

9º Se tiver como também clique na opção de consulta, será redirecionado para uma nova tela na qual pode escolher o tipo de consulta a ser realizada (Aluno, Professor ou Fornecedor).

10º Esse foi nosso projeto!

Agradecemos pela atenção!