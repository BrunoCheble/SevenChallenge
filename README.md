# SevenChallenge

- Para executar os testes: dentro da pasta ./app, execute o comando vendor/bin/phpunit
- Url configurada para o docker: 0.0.0.0:9001

# SevenChallenge

Pretende-se explorar as tuas habilidades de POO em PHP criando 3 classes.
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

O Rectangle deverá herdar do Shape e os requisitos são os seguintes:
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
