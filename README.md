# 🐘 Relatório da Atividade – Testes com PHPUnit

**Alunos:** Thiago Emanuel Correia Heckler e Guiulherme Galvani Morigi\
**Curso:** Ciência da Computação\
**Disciplina:** Engenharia de Software\
**Professor:** Roberson Junior Fernandes Alves\
**Data:** 10/04/2025


### ✅Objetivo da Atividade
Analisar funções PHP contidas no arquivo `Funcoes.php` e criar testes unitários com PHPUnit no arquivo `tests/FuncoesTest.php`. Para cada função, foram realizados ao menos dois testes

- Um com comportamento esperado;
- Um com entrada inválida (quando aplicável).



### 🗃 Estrutura do Projeto ###
```
testes-aula/
├── src/
│   └── Funcoes.php
├── tests/
│   └── FuncoesTest.php
├── vendor/        ← Gerado pelo Composer
├── composer.json
├── composer.lock
```

### 🧪 Funções Testadas

| Função | Testes Criados |
| --- | --- |
| `isEven($n)` |  Número par e número ímpar |
| `factorial($n)` | Número positivo, zero e número negativo (inválido) |
| `isPalindrome($str)` | Frase palíndroma e palavra comum |
| `fahrenheitToCelsius($f)` | Valor exato (32°F → 0°C) e valor negativo |
| `calculateDiscount($p, $%)` | Desconto válido, desconto zero e valores negativos |

### 👨‍💻 Comando de Execução
`./vendor/bin/phpunit tests`

### 📜 Resultado da Execução
``` 
PHPUnit 10.x by Sebastian Bergmann and contributors.

..............                                                    14 / 14 (100%)

Time: 00:00.123, Memory: 6.00 MB

OK (14 tests, 14 assertions)
```
### 📝 Resolução

1. Os testes ajudaram a identificar comportamentos inesperados?
Sim. Especialmente em casos de exceções, como nos testes de entradas negativas nas funções `factorial()` e `calculateDiscount()`, os testes ajudaram a garantir que o sistema se comporta como o esperado em situações adversas.

2. Algum teste falhou? Por quê?
Não. Todos os testes passaram com sucesso. Caso algum falhasse, a mensagem de erro seria exibida, facilitando a identificação do problema.

3. Como os testes podem ajudar na evolução segura do código?
Os testes funcionam como uma proteção ao sistema. Se futuramente alguma função for alterada, os testes avisarão se algo deixou de funcionar corretamente. Isso reduz erros e aumenta a confiança no código em produção.
