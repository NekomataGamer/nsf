<?php
class pagesController extends Controller{
    public function sobre(){
        $dados['home'] = false;
        
        $this->loadTemplate('sobre', $dados);
    }
    public function cursos(){
        $dados = array();
        $dados['home'] = false;
        $dados['cursos'] = array(
            array(
                'title'=>'ADMINISTRAÇÃO',
                'desc'=>'O curso de Administração da NSF forma profissionais com amplo domínio em diversas áreas administrativas. Com competência para atuar em gerenciamento de resultados, nos mais variados segmentos de mercado.',
                'img'=>'ADMINISTRACAO.PNG',
                'duration'=> 4,
                'modality'=>'Presencial',
                'shift'=>'Noturno',
                'formation'=>'Barcharelado',
                'regime'=>'Semestral',
                'Monthly'=>'R$ 720,00',
                'schedule'=>'18h às 22h'
            ),
            array(
                'title'=>'ARQUITETURA',
                'desc'=>'O Curso de Arquitetura e Urbanismo da NSF, oferece ao aluno vasto conhecimento em Construção Civil, Urbanismo, Paisagismo, Meio Ambiente, Ecologia, soluções e inovações que requerem criatividade e planejamento em acordo com o meio ambiente.',
                'img'=>'ARQUITETURA.PNG',
                'duration'=> 5,
                'modality'=>'Presencial',
                'shift'=>'Noturno',
                'formation'=>'Barcharelado',
                'regime'=>'Semestral',
                'Monthly'=>'R$ 1120,00',
                'schedule'=>'18h às 22h'
            ),
            array(
                'title'=>'DIREITO',
                'desc'=>'O Curso da NSF proporciona a consolidação da formação de Bacharéis em Direito habilitados ao mercado de trabalho com total conhecimento em normas éticas, humanísticas, técnico- jurídicas e práticas.',
                'img'=>'DIREITO.PNG',
                'duration'=> 5,
                'modality'=>'Presencial',
                'shift'=>'Noturno',
                'formation'=>'Barcharelado',
                'regime'=>'Semestral',
                'Monthly'=>'R$ 920,00',
                'schedule'=>'18h às 22h'
            ),
            array(
                'title'=>'CIÊNCIAS ECONÔMICAS',
                'desc'=>'O Curso de Ciências Econômicas da NSF oferece uma formação multidisciplinar, onde o graduado poderá exercer sua função na área de gestão de negócios, verificando a adequação dos recursos financeiros, observando as restrições orçamentárias, projetando em números o crescimento de uma empresa , fazendo leituras de mercado, políticas governamentais e cenário econômico.',
                'img'=>'CIENCIAS_ECONOMICAS.PNG',
                'duration'=> 5,
                'modality'=>'Presencial',
                'shift'=>'Noturno',
                'formation'=>'Barcharelado',
                'regime'=>'Semestral',
                'Monthly'=>'R$ 360,00',
                'schedule'=>'18h às 22h'
            ),
            array(
                'title'=>'COMUNICAÇÃO SOCIAL',
                'desc'=>'O curso de Comunicação Social da NSF HABILITA O GRADUADO produzir, editar e transmitir informações nas mais diferentes linguagens, mídias e suportes com coerência e ética. Desenvolvendo suas capacidades críticas e de construção de pensamento, com conhecimentos necessários para se adaptar aos novos mercados.',
                'img'=>'COMUNICACAO_SOCIAL.PNG',
                'duration'=> 5,
                'modality'=>'Presencial',
                'shift'=>'Noturno',
                'formation'=>'Barcharelado',
                'regime'=>'Semestral',
                'Monthly'=>'R$ 360,00',
                'schedule'=>'18h às 22h'
            ),
            array(
                'title'=>'CIÊNCIAS CONTÁBEIS',
                'desc'=>'O curso de Ciências Contábeis da NSF habilita os alunos numa formação generalista e empreendedora, a serem capazes de trabalhar em equipe, gerenciar pessoas, desenvolver pensamento crítico, prontos para registrar atos e fatos administrativos que acontecem nas empresas e identificar, medir, acumular, analisar, preparar, interpretar e relatar informações, tanto financeiras quanto operacionais, para uso interno e externo à empresa.',
                'img'=>'CONTABILIDADE.PNG',
                'duration'=> 5,
                'modality'=>'Presencial',
                'shift'=>'Noturno',
                'formation'=>'Barcharelado',
                'regime'=>'Semestral',
                'Monthly'=>'R$ 360,00',
                'schedule'=>'18h às 22h'
            )
        );
        $this->loadTemplate('cursos', $dados);
    }

    public function ingressar(){
        $dados['home'] = false;
        $this->loadTemplate('ingressar', $dados);
    }

    public function npj(){
        $dados['home'] = false;
        $this->loadTemplate('npj', $dados);
    }

    public function fale_conosco(){
        $dados['home'] = false;
        $this->loadTemplate('fale_conosco', $dados);
    }

    public function trabalhe_conosco(){
        $dados['home'] = false;
        $this->loadTemplate('trabalhe_conosco', $dados);
    }
}