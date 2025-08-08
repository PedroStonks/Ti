<?php

// A CLASSE BASE QUE DEFINE A ESTRUTURA E OS MÉTODOS MÁGICOS
abstract class PersonagemXMen
{
    // Atributos protegidos para encorajar o uso de __get e __set
    protected $nome;
    protected $nomeArquivo;
    protected $poderes;
    protected $nivelDePoder;
    protected $biografia;
    protected $codinomeMissao; // Atributo que será definido via __set

    // NOVOS ATRIBUTOS
    protected $forca;
    protected $agilidade;
    protected $resistencia;
    protected $projecaoDeEnergia;
    protected $inteligencia;

    // O método mágico __get é chamado quando tentamos acessar um atributo protegido/privado
    public function __get($atributo)
    {
        return $this->$atributo;
    }

    // O método mágico __set é chamado quando tentamos definir um valor para um atributo protegido/privado
    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
}

// AS CLASSES FILHAS, COM OS NOVOS ATRIBUTOS ADICIONADOS
class Wolverine extends PersonagemXMen
{
    public function __construct()
    {
        $this->nome = 'Wolverine (Logan)';
        $this->nomeArquivo = 'wolverine';
        $this->poderes = ['Fator de Cura Regenerativo', 'Garras de Adamantium', 'Sentidos Aguçados', 'Esqueleto de Adamantium'];
        $this->nivelDePoder = 100;
        $this->biografia = 'Um mutante com um passado misterioso e a capacidade de se curar de qualquer ferimento. Suas garras retráteis o tornam um dos combatentes mais letais do mundo.';
        $this->forca = 85;
        $this->agilidade = 90;
        $this->resistencia = 100;
        $this->projecaoDeEnergia = 10;
        $this->inteligencia = 70;
    }
}

class Ciclope extends PersonagemXMen
{
    public function __construct()
    {
        $this->nome = 'Ciclope (Scott Summers)';
        $this->nomeArquivo = 'Ciclope';
        $this->poderes = ['Rajadas Ópticas de Energia Concussiva', 'Mestre em Tática e Estratégia'];
        $this->nivelDePoder = 88;
        $this->biografia = 'O líder de campo dos X-Men. Dispara rajadas incontroláveis de seus olhos, forçando-o a usar um visor de quartzo-rubi para controlar seu poder devastador.';
        $this->forca = 60;
        $this->agilidade = 75;
        $this->resistencia = 70;
        $this->projecaoDeEnergia = 95;
        $this->inteligencia = 85;
    }
}

class JeanGrey extends PersonagemXMen
{
    public function __construct()
    {
        $this->nome = 'Jean Grey';
        $this->nomeArquivo = 'JeanGrey';
        $this->poderes = ['Telepatia Nível Ômega', 'Telecinese Nível Ômega', 'Manifestação da Força Fênix'];
        $this->nivelDePoder = 98;
        $this->biografia = 'Uma das mutantes mais poderosas do planeta, com habilidades telepáticas e telecinéticas quase ilimitadas. É o avatar da entidade cósmica conhecida como Força Fênix.';
        $this->forca = 50;
        $this->agilidade = 80;
        $this->resistencia = 85;
        $this->projecaoDeEnergia = 100;
        $this->inteligencia = 95;
    }
}

class Tempestade extends PersonagemXMen
{
    public function __construct()
    {
        $this->nome = 'Tempestade (Ororo Munroe)';
        $this->nomeArquivo = 'Tempestade';
        $this->poderes = ['Controle Climático (Atmosferocinese)', 'Voo', 'Conexão com os Elementos'];
        $this->nivelDePoder = 90;
        $this->biografia = 'Descendente de uma antiga linhagem de sacerdotisas africanas, Ororo pode controlar o clima, criando desde neblinas sutis a furacões devastadores.';
        $this->forca = 55;
        $this->agilidade = 85;
        $this->resistencia = 75;
        $this->projecaoDeEnergia = 90;
        $this->inteligencia = 80;
    }
}

class ProfessorX extends PersonagemXMen
{
    public function __construct()
    {
        $this->nome = 'Professor X (Charles Xavier)';
        $this->nomeArquivo = 'Professorx';
        $this->poderes = ['A Mente Telepática Mais Poderosa do Mundo', 'Projeção Astral', 'Controle Mental'];
        $this->nivelDePoder = 99;
        $this->biografia = 'O fundador dos X-Men. Sonha com a coexistência pacífica entre humanos e mutantes, usando sua telepatia para proteger e guiar.';
        $this->forca = 10;
        $this->agilidade = 15;
        $this->resistencia = 30;
        $this->projecaoDeEnergia = 99; // Rajadas psíquicas
        $this->inteligencia = 100;
    }
}

class Magneto extends PersonagemXMen
{
    public function __construct()
    {
        $this->nome = 'Magneto (Max Eisenhardt)';
        $this->nomeArquivo = 'Magneto';
        $this->poderes = ['Controle Mestre do Magnetismo', 'Geração de Campos de Força', 'Voo Magnético'];
        $this->nivelDePoder = 97;
        $this->biografia = 'Um sobrevivente do Holocausto e mestre do magnetismo. Luta pela supremacia mutante, acreditando ser a única forma de proteção contra a perseguição humana.';
        $this->forca = 30;
        $this->agilidade = 60;
        $this->resistencia = 80;
        $this->projecaoDeEnergia = 98;
        $this->inteligencia = 95;
    }
}

class Vampira extends PersonagemXMen
{
    public function __construct()
    {
        $this->nome = 'Vampira (Anna Marie)';
        $this->nomeArquivo = 'vampira';
        $this->poderes = ['Absorção de Poderes e Memória por Toque', 'Voo', 'Super-Força'];
        $this->nivelDePoder = 88;
        $this->biografia = 'Seu poder é uma maldição: um toque incontrolável que absorve a força vital e as habilidades de outros. Encontrou nos X-Men uma família e um propósito.';
        $this->forca = 90;
        $this->agilidade = 80;
        $this->resistencia = 85;
        $this->projecaoDeEnergia = 40; // Pode absorver
        $this->inteligencia = 70;
    }
}

class Gambit extends PersonagemXMen
{
    public function __construct()
    {
        $this->nome = 'Gambit (Remy LeBeau)';
        $this->nomeArquivo = 'gambit';
        $this->poderes = ['Aceleração Molecular (Energia Cinética)', 'Charme Hipnótico', 'Mestre em Combate com Bastão'];
        $this->nivelDePoder = 80;
        $this->biografia = 'Um ladrão charmoso de Nova Orleans. Sua habilidade de transformar qualquer objeto inanimado em um projétil explosivo o torna um adversário imprevisível.';
        $this->forca = 50;
        $this->agilidade = 95;
        $this->resistencia = 65;
        $this->projecaoDeEnergia = 80;
        $this->inteligencia = 75;
    }
}

class Fera extends PersonagemXMen
{
    public function __construct()
    {
        $this->nome = 'Fera (Dr. Henry McCoy)';
        $this->nomeArquivo = 'Fera';
        $this->poderes = ['Força e Agilidade Sobre-Humanas', 'Intelecto Nível Gênio', 'Garras e Presas'];
        $this->nivelDePoder = 82;
        $this->biografia = 'Um cientista de renome mundial e membro fundador dos X-Men. Apesar de sua aparência bestial, possui uma mente brilhante e um coração gentil.';
        $this->forca = 80;
        $this->agilidade = 85;
        $this->resistencia = 75;
        $this->projecaoDeEnergia = 15;
        $this->inteligencia = 100;
    }
}

class HomemDeGelo extends PersonagemXMen
{
    public function __construct()
    {
        $this->nome = 'Homem de Gelo (Bobby Drake)';
        $this->nomeArquivo = 'HomemdeGelo';
        $this->poderes = ['Criocinese Nível Ômega', 'Criação de Construtos de Gelo', 'Corpo de Gelo Orgânico'];
        $this->nivelDePoder = 92;
        $this->biografia = 'Um mutante de nível Ômega com controle absoluto sobre o frio. Apesar de seu imenso poder, mantém um senso de humor e leveza, sendo o comediante da equipe.';
        $this->forca = 40;
        $this->agilidade = 70;
        $this->resistencia = 90;
        $this->projecaoDeEnergia = 94;
        $this->inteligencia = 70;
    }
}

class Anjo extends PersonagemXMen
{
    public function __construct()
    {
        $this->nome = 'Anjo (Warren Worthington III)';
        $this->nomeArquivo = 'Anjo';
        $this->poderes = ['Voo com Asas Orgânicas', 'Fisiologia Aprimorada', 'Sangue com Fator de Cura'];
        $this->nivelDePoder = 78;
        $this->biografia = 'Um herdeiro milionário e membro fundador dos X-Men. Suas grandes asas brancas lhe concedem o poder de voar, tornando-o o anjo da guarda da equipe.';
        $this->forca = 60;
        $this->agilidade = 90;
        $this->resistencia = 65;
        $this->projecaoDeEnergia = 20;
        $this->inteligencia = 75;
    }
}

class Colossus extends PersonagemXMen
{
    public function __construct()
    {
        $this->nome = 'Colossus (Piotr Rasputin)';
        $this->nomeArquivo = 'Colossus';
        $this->poderes = ['Pele de Aço Orgânico Transmorfo', 'Força e Resistência Sobre-Humanas'];
        $this->nivelDePoder = 89;
        $this->biografia = 'Um artista de coração gentil da Rússia que pode transformar seu corpo em metal orgânico, tornando-se quase invulnerável. É a força e a alma da equipe.';
        $this->forca = 95;
        $this->agilidade = 50;
        $this->resistencia = 100;
        $this->projecaoDeEnergia = 10;
        $this->inteligencia = 70;
    }
}

class Noturno extends PersonagemXMen
{
    public function __construct()
    {
        $this->nome = 'Noturno (Kurt Wagner)';
        $this->nomeArquivo = 'Noturno';
        $this->poderes = ['Teletransporte Interdimensional', 'Agilidade Sobre-Humana', 'Aderência Física a Superfícies'];
        $this->nivelDePoder = 79;
        $this->biografia = 'Sua aparência demoníaca contrasta com sua fé devota e personalidade amável. Sua habilidade de se teletransportar o torna um mestre da infiltração.';
        $this->forca = 45;
        $this->agilidade = 100;
        $this->resistencia = 60;
        $this->projecaoDeEnergia = 30;
        $this->inteligencia = 75;
    }
}

class LinceNegra extends PersonagemXMen
{
    public function __construct()
    {
        $this->nome = 'Lince Negra (Kitty Pryde)';
        $this->nomeArquivo = 'linceNegra';
        $this->poderes = ['Intangibilidade (Faseamento)', 'Interrupção de Sistemas Eletrônicos'];
        $this->nivelDePoder = 75;
        $this->biografia = 'Pode se tornar intangível, permitindo que atravesse matéria sólida. Entrou na equipe como a "irmã mais nova", evoluindo para uma líder competente e gênio da computação.';
        $this->forca = 40;
        $this->agilidade = 85;
        $this->resistencia = 60;
        $this->projecaoDeEnergia = 50; // Ao 'fasar' eletrônicos
        $this->inteligencia = 90;
    }
}

class Psylocke extends PersonagemXMen
{
    public function __construct()
    {
        $this->nome = 'Psylocke (Betsy Braddock)';
        $this->nomeArquivo = 'Psylocke';
        $this->poderes = ['Telepatia', 'Construção de Armas Psíquicas (Adaga e Katana)', 'Mestre em Artes Marciais'];
        $this->nivelDePoder = 86;
        $this->biografia = 'Uma telepata que pode focar sua energia psiônica em armas brancas mortais. Treinada como uma ninja, ela é uma guerreira formidável, tão letal em combate mental quanto físico.';
        $this->forca = 70;
        $this->agilidade = 95;
        $this->resistencia = 70;
        $this->projecaoDeEnergia = 85;
        $this->inteligencia = 80;
    }
}

?>