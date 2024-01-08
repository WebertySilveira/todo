Executar projeto

- No terminal `docker compose up -d`
- Dentro do container `php composer.phar install`
- Script do banco está na raiz do projeto, rodar no container mysql local

será montado localmente na url 
- localhost:8100


Ferramentas de review e correção de código (Dentro do container):

- php composer.phar check
  - php stan
  - php cs
- php composer.phar cs:fix
  - php cs fixer


Objetivo: Desenvolver um sistema de gerenciamento de tarefas (to-do list).
- Utilize PHP, MySQL, CSS, JavaScript, Bootstrap, Orientação a Objetos utilizando as convenções da PSR-7, PSR-4, PSR-12.

Requisitos funcionais:
- Implemente a funcionalidade de arrastar e soltar tarefas entre as colunas "To-Do", "Doing" e "Done".
- As colunas "To-Do", "Doing" e "Done" devem refletir o status atual das tarefas.
- Todas as interações, como marcação de conclusão, exclusão e edição de tarefas, devem ser realizadas por meio de requisições AJAX.
Ao acessar uma tela diferente, o sistema deve exibir em tempo real as alterações feitas por outros usuários.

Requisitos técnicos
- Mantenha a estrutura do código de acordo com as diretrizes PSR-7, PSR-4, PSR-12.
- Utilize o padrão de projeto MVC (Model-View-Controller) para organizar o código PHP.
- Adote a abordagem orientada a objetos para a implementação das funcionalidades.
- Utilize a biblioteca jQuery para facilitar a manipulação do DOM e as requisições AJAX.
- As interações entre as colunas devem ser salvas no banco de dados MySQL para persistência.
- Mantenha a responsividade da interface utilizando Bootstrap.


Critérios de Avaliação
- Implementação do Arrastar e Soltar: Verificação da correta implementação da funcionalidade de arrastar e soltar tarefas entre as colunas.
- Atualização em Tempo Real: Avaliação da capacidade do sistema de exibir alterações em tempo real feitas por outros usuários.
- Boas Práticas: Observação do uso adequado de padrões de código, estrutura organizada e modularidade.
- Responsividade: Verificação da interface responsiva utilizando Bootstrap.
- Segurança e Validação: Garantia de segurança nas operações e validação de dados tanto no frontend quanto no backend.
- Documentação: Inclusão de uma documentação clara e explicativa, destacando as atualizações realizadas no desafio.

Entrega
- O código fonte deve ser disponibilizado em um repositório GitHub privado
- O desafio é INDIVIDUAL
- Inclua instruções claras sobre como configurar o ambiente e executar o sistema.
- A entrega deve ser realizada até a data limite estipulada no início do desafio.

Observações
- Este desafio tem o objetivo de avaliar a capacidade do desenvolvedor em implementar funcionalidades avançadas em um sistema web.
- Certifique-se de esclarecer dúvidas antes de iniciar o desenvolvimento.
