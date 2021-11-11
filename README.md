# SevenChallenge

- Para executar os testes: dentro da pasta ./app, execute o comando vendor/bin/phpunit
- Url configurada para o docker: 0.0.0.0:9001

## Descrição do Challenge

### Pretende-se explorar as tuas habilidades de POO em PHP criando 3 classes.
Shape, Rectangle e Circle.
(Nota: este exercício é destinado para qualquer nível de conhecimento, por isso, certifica-te que
provas o teu)
O Shape deverá ser a classe base com os seguintes requisitos:
1. 4 propriedades com diferentes tipos de visibilidade.
a. Um name público.
b. Um width e length protegido.
c. Um id privado.
2. Uma constante que define o seu tipo com o valor 1.
3. Um construtor que aceita o length e width como parâmetros para inicializar as
respectivas propriedades do objeto.
4. O construtor deverá também inicializar o id, que deverá ser um valor único (fica à tua
liberdade a forma de o fazeres).
5. Getters e Setters da propriedade id.
6. Um método público que calcula e retorna a área do objeto.
7. Um método que retorna um outro objeto com todas as propriedades do mesmo
(name, width, length, id).
a. Nota: Tens a liberdade de retornar este objeto da forma que aches mais
adequada ao problema.

### O Rectangle deverá herdar do Shape e os requisitos são os seguintes:
1. Uma constante que define o seu tipo com o valor 2.
(Nota: se usares a herança devidamente não deverá requerer nenhum método nem
parâmetro).
O Circle deverá herdar do Shape e os requisitos são os seguintes:
1. Uma constante que define o seu tipo com o valor 3.
2. Uma propriedade protegida chamada de radius.
3. Um construtor que aceita o parâmetro radius e inicializa a devida propriedade do
objeto. (Deverás chamar o construtor da herança devidamente).
4. Um método público que calcula e retorna a área do Círculo.
5. Deverá ter a mesma habilidade que foi definida no Shape, e retornar um outro objeto
com as devidas propriedades (name, radius, id).

### Como desenvolver e entregar o exercício:
1. Cria um repositório no github, por exemplo
2. Cria a branch: dev
3. Desenvolve na branch dev
4. No final, o exercício deverá estar disponível no master
5. Não te esqueças de documentar o exercício, no ficheiro README.

### Diferenciais:
1. Tens liberdade para adicionar novas funcionalidades ou implementar da forma que
achares mais correta (desde que devidamente justificado), de forma a mostrares e
valorizar as tuas habilidades.
2. Tens liberdade para usar as novas versões do PHP e tipar as propriedades e
métodos que aches necessário.
Bónus:
As tarefas bónus são opcionais, mas podem dar pontos no processo de seleção:
● Elabora uma classe de testes unitários para validar o cálculo das áreas para as
demais formas apresentadas.
● Elabora a aplicação dentro de um container Docker, documentando todas as ações
necessárias para testar o exercício dentro do mesmo.
● Imagina agora que cada classe herdada do Shape pretende ter a sua forma própria
de gerar um id, (exemplo: uuid, unix timestamp, etc) onde este pode variar de
acordo com os requisitos de quem vai instanciar uma nova classe. Elabora uma
solução para este problema, tens liberdade total para optar pela solução que
consideres mais elegante.
