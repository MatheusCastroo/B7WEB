M -> Model
V -> View
C -> Controler

- O usuário requisita a url site.com.br/sobre
- O mvc vai verificar se esta ROTA está estabelecida. (Se o endereço 'sobre' existe).
- O mvc vai mandar a requisição para o CONTROLLER da rota.
- O CONTROLLER pode carregar um VIEW.
- O CONTROLLER pode chamar um MODEL.

-controller pega informações do model e manda para o view.