<?php 

	

$tipo_empresa = $_POST['tipo_empresa'];

$regime_tributario = $_POST['regime_tributario'];

$localizacao_matriz = $_POST['localizacao_matriz'];

$filiais_exterior = $_POST['filiais_exterior'];

$exportacao = $_POST['exportacao'];

$importacao = $_POST['importacao'];

$desenvolve_matriz_risco = $_POST['desenvolve_matriz_risco'];

$desenvolve_controles_internos_eficientes = $_POST['desenvolve_controles_internos_eficientes'];

$codigo_etica_manual_conduta = $_POST['codigo_etica_manual_conduta'];

$politicas_compras_escolha_fornecedores = $_POST['politicas_compras_escolha_fornecedores'];

$conhece_lei_anticorrupcao = $_POST['conhece_lei_anticorrupcao'];

$protegida_lei_anticorrupcao = $_POST['protegida_lei_anticorrupcao'];

$conhece_lei_lavagem_dinheiro = $_POST['conhece_lei_lavagem_dinheiro'];

$programa_pld = $_POST['programa_pld'];

$colaboradores = $_POST['colaboradores'];

$canal_denuncias = $_POST['canal_denuncias'];

$due_diligence = $_POST['due_diligence'];

$representantes = $_POST['representantes'];

$conhece_LGPD = $_POST['conhece_LGPD'];

$preparada_lgpd = $_POST['preparada_lgpd'];

$negocios_entes_publicos = $_POST['negocios_entes_publicos'];

$treinamentos_etica_compliance = $_POST['treinamentos_etica_compliance'];

$compliance_efetivo = $_POST['compliance_efetivo'];



$pontuacao = 0;



if($tipo_empresa == "privada"){

	$pontuacao += 3;

} else if($tipo_empresa == "publica"){

	$pontuacao += 9;

} else if($tipo_empresa == "mista"){

	$pontuacao += 7;

}



if($regime_tributario == "lucro_real"){

	$pontuacao += 10;

	$msg_regime_tributario = "Neste regime o imposto é calculado sobre o lucro real da empresa, ou seja apenas pelo que a empresa através da sua apuração contábil entende que “deva ser tributado”, assim estas empesas naturalmente terão um rigor maior nos processos de fiscalização pelos entes tributários";

} else if($regime_tributario == "lucro_presumido"){

	$pontuacao += 7;

	$msg_regime_tributario = "Normalmente empresas que faturam de R$3,6 milhões até o limite de R$78 milhões por ano. Estas empresas estão no hiato entre as mais visadas pelo fisco (Lucro Real) e aquelas com menos rigor fiscal (Simples). Mas pela faixa de faturamento e muitas vezes pela atividade desenvolvida merecem uma classificação de risco maior.";

} else if($regime_tributario == "lucro_arbitrado"){

	$pontuacao += 9;

	$msg_regime_tributario = "Neste regime os resultados contábeis são submetidos ao controle da autoridade tributária. Normalmente por conta de empresa falha com suas obrigações. Diante destas circunstâncias é natural que este regime traga mais risco.";

} else if($regime_tributario == "simples_nacional"){

	$pontuacao += 5;

	$msg_regime_tributario = "Regime simplificado e um dos mais utilizados por empreendedores Brasileiros. Com limite de faturamento de até R$3,6 milhões por ano. Face a todas as benesses fiscais e os limites de faturamento, razoavelmente baixos se trata de um regime com menos rigor e menos riscos.";

} else if($regime_tributario == "mei"){

	$pontuacao += 2;

	$msg_regime_tributario = "";

}



if($localizacao_matriz == "brasil"){

	$pontuacao += 5;

	$msg_localizacao_matriz = "Empresas cujas operações estejam integralmente no Brasil ou no mínimo suas Matrizes controlando os negócios estejam no Brasil diminuem os riscos, haja vista que o domínio das legislações e fatores culturais por exemplo são de mais conhecimento de todos.";

} else if($localizacao_matriz == "exterior"){

	$pontuacao += 10;

	$msg_localizacao_matriz = "Empresas cujas operações estejam integralmente no Brasil ou no mínimo suas Matrizes controlando os negócios estejam no Brasil diminuem os riscos, haja vista que o domínio das legislações e fatores culturais por exemplo são de mais conhecimento de todos.";

} 



if($filiais_exterior == "sim"){

	$pontuacao += 9;

	$msg_filiais_exterior = "A regulação de normas e legislações também deverão seguir legislações internacionais, com a diferença que a centralização está no Brasil mas nem por isso com menos complexidade envolvida na operação.";

} else if($filiais_exterior == "nao"){

	$pontuacao += 5;

	$msg_filiais_exterior = "Empresas cujas operações estejam integralmente no Brasil ou no mínimo suas Matrizes controlando os negócios estejam no Brasil diminuem os riscos, haja vista que o domínio das legislações e fatores culturais por exemplo são de maior conhecimento de todos.";

} 





if($exportacao == "sim"){

	$pontuacao += 9;

	$msg_exportacao = "Operações de exportação envolvem riscos maiores variados como os ritos de despacho aduaneiro, maior incidência de impostos envolvidos e o correlato conhecimento destas, variações cambiais entre outros.";

} else if($exportacao == "nao"){

	$pontuacao += 5;

	$msg_exportacao = "Concentrar as operações de vendas e/ou prestação de serviços apenas no Brasil limita os riscos das empresas não só as questões de natureza de câmbio mas as questões tributárias.";

} 



if($importacao == "sim"){

	$pontuacao += 9;

	$msg_importacao = "Operações de importação envolvem riscos maiores variados como os ritos de desembaraço aduaneiro, maior incidência de impostos envolvidos e o correlato conhecimento destas, variações cambiais entre outros.";

} else if($importacao == "nao"){

	$pontuacao += 5;

	$msg_importacao = "Concentrar as operações  de compras e/ou tomada de serviços apenas no Brasil limita os riscos das empresas não só as questões de natureza de câmbio mas as questões tributárias.";

} 



if($desenvolve_matriz_risco == "sim"){

	$pontuacao += 3;

	$mgs_desenvolve_matriz_risco = "É muito importante entender quais os riscos que uma organização tem e avalia-los a fim de trabalhar em sua mitigação.";

} else if($desenvolve_matriz_risco == "nao"){

	$pontuacao += 10;

	$mgs_desenvolve_matriz_risco = "A ausência de uma matriz de risco torna a empresa vulnerável. É como navegar sem um mapa sem norte. Quaisquer intempéries por menor que sejam, podem representar e causar grandes impactos e danos.";

} 



if($desenvolve_controles_internos_eficientes == "sim"){

	$pontuacao += 2;

	$msg_desenvolve_controles_internos_eficientes = "Controles internos são ferramentas que ajudam a empresa a ter êxito em seus propósitos e realizar adequadamente suas operações. Importante ferramenta na prevenção e detecção de riscos. Veja artigo sobre o tema em <a target='_blank' href='http://luiznobrega.com/controle-interno/'>http://luiznobrega.com/controle-interno/</a>";

} else if($desenvolve_controles_internos_eficientes == "nao"){

	$pontuacao += 10;

	$msg_desenvolve_controles_internos_eficientes = "A ausência de controles internos abre uma lacuna enorme para que a empresa não atinja seus objetivos. Potencializa o risco de erros e fraudes além de enfraquecer em demasia suas demonstrações contábeis. Veja artigo sobre o tema em <a target='_blank' href='http://luiznobrega.com/controle-interno/'>http://luiznobrega.com/controle-interno/</a>";

} 



if($codigo_etica_manual_conduta == "sim"){

	$pontuacao += 4;

	$msg_etica_manual_conduta = "É muito importante normatizar comportamentos e condutas dentro de uma empresa.

Mesmo comportamentos mais básicos esperados dos colaboradores devem estar devidamente regrados dentro de um documento como um Código de Conduta por exemplo. Mesmo o óbvio precisa ser dito e principalmente escrito. Confira nosso artigo sobre o tema em <a target='_blank' href='https://luiznobrega.com/saiba-rentabilizar-seu-negocio-com-compliance/'>https://luiznobrega.com/saiba-rentabilizar-seu-negocio-com-compliance/</a>

";

} else if($codigo_etica_manual_conduta == "nao"){

	$pontuacao += 8;

	$msg_etica_manual_conduta = "Comportamentos dos colaboradores e ou terceiros dentro de uma empresa devem ser motivo de atenção e normatização por parte da empresa a fim de se respaldar frente a quaisquer comportamentos inadequados dentro de seus domínios. A falta de um documento como este aumenta os riscos de uma organização ser complacente sobre os atos dos colaboradores e terceiros. Confira nosso artigo sobre o tema em <a target='_blank' href='https://luiznobrega.com/saiba-rentabilizar-seu-negocio-com-compliance/'>https://luiznobrega.com/saiba-rentabilizar-seu-negocio-com-compliance/</a>";

} 





if($politicas_compras_escolha_fornecedores == "sim"){

	$pontuacao += 4;

	$msg_politicas_compras_escolha_fornecedores = "É muito importante ter políticas que regulamentem determinadas atividades dentro das empresas. A escolha de fornecedores e os critérios de compras devem estar devidamente regrados a fim de tecer mais lisura e transparência nos processos.";

} else if($politicas_compras_escolha_fornecedores == "nao"){

	$pontuacao += 8;

	$msg_politicas_compras_escolha_fornecedores = "É muito importante ter políticas que regulamentem determinadas atividades dentro das empresas. A escolha de fornecedores e os critérios de compras devem estar devidamente regrados a fim de tecer mais lisura e transparência nos processos. A falta destes instrumentos enseja uma maior chance de erros e fraudes. Veja alguns modelos em <a target='_blank' href='http://luiznobrega.com/compliance-deve-ir-alem-de-regras-e-procedimentos-nas-organizacoes-pamela-roque-insper/'>http://luiznobrega.com/compliance-deve-ir-alem-de-regras-e-procedimentos-nas-organizacoes-pamela-roque-insper/</a>. Ressalvamos que é muito importante que cada política tenha as características da empresa e respeite suas peculiaridades.";

} 



if($conhece_lei_anticorrupcao == "sim"){

	$pontuacao += 3;

	$msg_conhece_lei_anticorrupcao = "A Lei Anticorrupção trouxe uma responsabilização objetiva da Pessoa Jurídica em casos que envolvam corrupção relacionados com seu CNPJ. Ledo engano imaginar que tais implicações sejam exclusivas de multinacionais. Casos triviais de uma “aceleração” de um alvará por exemplo podem trazer consequências à empresa e seus sócios como um ato de corrupção. Ter o conhecimento de tais implicações é o começo do caminho na mitigação de riscos. Veja a Lei na íntegra em <a target='_blank' href='http://www.planalto.gov.br/ccivil_03/_ato2011-2014/2013/lei/l12846.htm'>http://www.planalto.gov.br/ccivil_03/_ato2011-2014/2013/lei/l12846.htm</a>";

} else if($conhece_lei_anticorrupcao == "nao"){

	$pontuacao += 8;

	$msg_conhece_lei_anticorrupcao = "A Lei Anticorrupção trouxe uma responsabilização direta da Pessoa Jurídica em casos que envolvam corrupção relacionados com seu CNPJ. Ledo engano imaginar que tais implicações sejam exclusivas de multinacionais. Casos triviais de uma “aceleração” de um alvará por exemplo podem trazer consequências à empresa e seus sócios como um ato de corrupção. Não ter o conhecimento de tais implicações potencializa os riscos de forma significativa. Veja a Lei na íntegra em <a target='_blank' href='http://www.planalto.gov.br/ccivil_03/_ato2011-2014/2013/lei/l12846.htm'>http://www.planalto.gov.br/ccivil_03/_ato2011-2014/2013/lei/l12846.htm</a>";

} 



if($protegida_lei_anticorrupcao == "sim"){

	$pontuacao += 3;

	$msg_protegida_lei_anticorrupcao = "A existência de mecanismos de proteção frente a Lei Anticorrupção pressupõe o entendimento deste instrumento legal e reduz significativamente seus riscos. Confira artigo em <href='https://luiznobrega.com/lei-anticorrupcao-completa-6-anos/'>https://luiznobrega.com/lei-anticorrupcao-completa-6-anos/</a>";

} else if($protegida_lei_anticorrupcao == "nao"){

	$pontuacao += 8;

	$msg_protegida_lei_anticorrupcao = "A inexistência de mecanismos de proteção frente a Lei Anticorrupção pressupõe a falta de entendimento deste instrumento legal ou desdém aos seus efeitos e assim aumenta significativamente seus riscos. Confira artigo em <a target='_blank' href='https://luiznobrega.com/lei-anticorrupcao-completa-6-anos/'>https://luiznobrega.com/lei-anticorrupcao-completa-6-anos/</a>";

} 





if($conhece_lei_lavagem_dinheiro == "sim"){

	$pontuacao += 4;

	$msg_conhece_lei_lavagem_dinheiro = "A Lei de Lavagem de Dinheiro, após as alterações de 2012 ampliaram muito o leque de situações que podem ser enquadradas como CRIMES de lavagem de dinheiro. Trouxe por exemplo questões tributárias como uma sonegação contumaz a qual pode ser enquadrada como Lavagem de Dinheiro. Ter consciência destes riscos é vital para as empresas. Veja a Lei na íntegra em <a target='_blank' href='http://www.planalto.gov.br/ccivil_03/leis/l9613.htm'>http://www.planalto.gov.br/ccivil_03/leis/l9613.htm</a>";

} else if($conhece_lei_lavagem_dinheiro == "nao"){

	$pontuacao += 9;

	$msg_conhece_lei_lavagem_dinheiro = "A Lei de Lavagem de Dinheiro, após as alterações de 2012 ampliaram muito o leque de situações que podem ser enquadradas como CRIMES de lavagem de dinheiro. Trouxe por exemplo questões tributárias como uma sonegação contumaz a qual pode ser enquadrada como Lavagem de Dinheiro. Não ter a consciência destes riscos é um risco enorme para as empresas. Veja a Lei na íntegra em <a target='_blank' href='http://www.planalto.gov.br/ccivil_03/leis/l9613.htm'>http://www.planalto.gov.br/ccivil_03/leis/l9613.htm</a>";

} 



if($programa_pld == "sim"){

	$pontuacao += 3;

	$msg_programa_pld = "Entender as implicações criminais advindos de Lavagem de Dinheiro e se prevenir através de um programa Preventivo mitiga significamente os riscos das empresas. Confira artigo sobre o tema em <a target='_blank' href='https://luiznobrega.com/lavagem-de-dinheiro/'>https://luiznobrega.com/lavagem-de-dinheiro/</a>";

} else if($programa_pld == "nao"){

	$pontuacao += 9;

	$msg_programa_pld = "Ignorar as implicações criminais advindos de Lavagem de Dinheiro e não se prevenir através de um programa Preventivo potencializa significamente os riscos das empresas. Confira artigo sobre o tema em <a target='_blank' href='https://luiznobrega.com/lavagem-de-dinheiro/'>https://luiznobrega.com/lavagem-de-dinheiro/</a>";

} 



if($colaboradores == "0 - 25"){

	$pontuacao += 1;

	$msg_colaboradores = "Dada a quantidade de funcionários, as implicações trabalhistas e riscos inerentes ao trabalho temos um risco muito baixo";

} else if($colaboradores == "26 - 50"){

	$pontuacao += 2;

	$msg_colaboradores = "Dada a quantidade de funcionários, as implicações trabalhistas e riscos inerentes ao trabalho temos um risco baixo";

} else if($colaboradores == "51 - 100"){

	$pontuacao += 3;

	$msg_colaboradores = "Dada a quantidade de funcionários, as implicações trabalhistas e riscos inerentes ao trabalho temos um risco médio";

} else if($colaboradores == "101 - 150"){

	$pontuacao += 4;

	$msg_colaboradores = "Dada a quantidade de funcionários, as implicações trabalhistas e riscos inerentes ao trabalho temos um risco médio";

} else if($colaboradores == "151 - 200"){

	$pontuacao += 5;

	$msg_colaboradores = "Dada a quantidade de funcionários, as implicações trabalhistas e riscos inerentes ao trabalho temos um risco médio";

} else if($colaboradores == "201 - 500"){

	$pontuacao += 6;

	$msg_colaboradores = "Dada a quantidade de funcionários, as implicações trabalhistas e riscos inerentes ao trabalho temos um risco médio";

} else if($colaboradores == "501 - 1000"){

	$pontuacao += 7;

	$msg_colaboradores = "Dada a quantidade de funcionários, as implicações trabalhistas e riscos inerentes ao trabalho temos um risco alto";

} else if($colaboradores == "1001 - 2000"){

	$pontuacao += 8;

	$msg_colaboradores = "Dada a quantidade de funcionários, as implicações trabalhistas e riscos inerentes ao trabalho temos um risco alto";

} else if($colaboradores == "2001 - 3000"){

	$pontuacao += 9;

	$msg_colaboradores = "Dada a quantidade de funcionários, as implicações trabalhistas e riscos inerentes ao trabalho temos um risco muito alto";

} else if($colaboradores == "acima 3000"){

	$pontuacao += 10;

	$msg_colaboradores = "Dada a quantidade de funcionários, as implicações trabalhistas e riscos inerentes ao trabalho temos um risco muito alto";

} 



if($canal_denuncias == "sim"){

	$pontuacao += 3;

	$msg_canal_denuncias = "Abrir a possibilidade de ter um canal a qual a empresa possa obter informações acerca da conduta de seus colaboradores, terceiros, ou da própria diretoria e seus desdobramentos propicia uma forme de aplicar medidas preventivas e corretivas, mitigando riscos. Veja artigo sobre o tema em <a target='_blank' href='https://luiznobrega.com/canais-de-denuncias-mostram-uma-realidade-nas-empresas/'>https://luiznobrega.com/canais-de-denuncias-mostram-uma-realidade-nas-empresas/</a>";

} else if($canal_denuncias == "nao"){

	$pontuacao += 8;

	$msg_canal_denuncias = "Não dar voz a todos que interagem com a empresa para eventualmente receber reclamações e denúncias de condutas da empresa abre a possibilidade de a empresa ter mais ocorrências de erros e fraudes aumentando seus riscos. Veja artigo sobre o tema em <a target='_blank' href='https://luiznobrega.com/canais-de-denuncias-mostram-uma-realidade-nas-empresas/'>https://luiznobrega.com/canais-de-denuncias-mostram-uma-realidade-nas-empresas/</a>";

} 



if($due_diligence == "sim"){

	$pontuacao += 4;

	$msg_due_diligence = "Conhecer aqueles à qual a empresa está se relacionando é de vital importância na mitigação de riscos. Desde questões atreladas a corresponsabilidade trabalhista até implicações em sua imagem. Veja artigo sobre o tema em <a target='_blank' href='http://luiznobrega.com/297-2desenvolvimento-compliance-brasil/'>http://luiznobrega.com/297-2desenvolvimento-compliance-brasil/</a>";

} else if($due_diligence == "nao"){

	$pontuacao += 8;

	$msg_due_diligence = "Não atentar na avaliação daqueles à qual a empresa está se relacionando é um risco alto a qual as empresas correm. Desde questões atreladas a corresponsabilidade trabalhista até implicações em sua imagem. Veja artigo sobre o tema em <a target='_blank' href='http://luiznobrega.com/297-2desenvolvimento-compliance-brasil/'>http://luiznobrega.com/297-2desenvolvimento-compliance-brasil/</a>";

} 



if($representantes == "sim"){

	$pontuacao += 9;

	$msg_representantes = "Alguns segmentos empresariais pela sua interação com órgãos públicos ou com um viés de vendas e metas agressivos podem comprometer a imagem de uma empresa ou até trazer consequências jurídicas as mesmas. A terceirização destas áreas traz um risco alto às empresas.";

} else if($representantes == "nao"){

	$pontuacao += 3;

	$msg_representantes = "Alguns segmentos empresariais pela sua interação com órgãos públicos ou com um viés de vendas e metas agressivos podem comprometer a imagem de uma empresa ou até trazer consequências jurídicas as mesmas. A ausência de terceirização nestas áreas é um risco menor às empresas.";

} 



if($conhece_LGPD == "sim"){

	$pontuacao += 3;

	$msg_conhece_LGPD = "A Lei Geral de Proteção de dados a LGPD determina a proteção de dados pessoais às quais as empresas tenham em seu poder. Essa proteção deve ser feita por TODAS as organizações independentemente do porte das mesmas. A experiência de outros países com relação a implantação da LGPD mostra que as empresas que não estavam preparadas sofreram multas em valores elevados. Portanto ter ciência das implicações legais traz segurança às empresas além de prevenir multas e vazamentos de informações. Saiba mais sobre a Lei em <a target='_blank' href='http://www.planalto.gov.br/ccivil_03/_ato2015-2018/2018/lei/L13709.htm'>http://www.planalto.gov.br/ccivil_03/_ato2015-2018/2018/lei/L13709.htm</a>";

} else if($conhece_LGPD == "nao"){

	$pontuacao += 8;

	$msg_conhece_LGPD = "A Lei Geral de Proteção de dados a LGPD determina a proteção de dados pessoais às quais as empresas tenham em seu poder. Essa proteção deve ser feita por TODAS as organizações independentemente do porte das mesmas. A experiência de outros países com relação a implantação da LGPD mostra que as empresas que não estavam preparadas sofreram multas em valores elevados. Portanto a não observância dos preceitos desta Lei acarretará em grandes doses de insegurança na proteção de dados além de expor às empresas a multas e vazamentos de informações. Saiba mais sobre a Lei em <a target='_blank' href='http://www.planalto.gov.br/ccivil_03/_ato2015-2018/2018/lei/L13709.htm'>http://www.planalto.gov.br/ccivil_03/_ato2015-2018/2018/lei/L13709.htm</a>";

} 





if($preparada_lgpd == "sim"){

	$pontuacao += 3;

	$msg_preparada_lgpd = "A existência de mecanismos de proteção de dados pessoais pressupõe o entendimento deste instrumento legal e reduz significativamente seus riscos. Confira artigo sobre o tema em <a target='_blank' href='http://luiznobrega.com/contagem-regressiva-para-lgpd/'>http://luiznobrega.com/contagem-regressiva-para-lgpd/</a>";

} else if($preparada_lgpd == "nao"){

	$pontuacao += 9;

	$msg_preparada_lgpd = "A inexistência de mecanismos de proteção de dados pessoais frente a LGPD pressupõe a falta de entendimento deste instrumento legal ou desdém aos seus efeitos e assim aumenta significativamente seus riscos além de expor fragilidades de vazamentos de dados, não só os pessoais como outros dados importantes das organizações. Confira artigo sobre o tema em <a target='_blank' href='http://luiznobrega.com/contagem-regressiva-para-lgpd/'>http://luiznobrega.com/contagem-regressiva-para-lgpd/</a>";

} 



if($negocios_entes_publicos == "sim"){

	$pontuacao += 10;

	$msg_negocios_entes_publicos = "Ter o faturamento ou parte dele oriundos da administração pública torna a operação mais arriscada. Desde a participação em processos licitatórios até questões ligadas à Lei anticorrupção.";

} else if($negocios_entes_publicos == "nao"){

	$pontuacao += 2;

	$msg_negocios_entes_publicos = "Uma participação 100% com a iniciativa privada e portanto sem negócios com entes públicos diminuem as chances de riscos, como por exemplo relacionados à Lei anticorrupção.";

} 



if($treinamentos_etica_compliance == "sim"){

	$pontuacao += 4;

	$msg_treinamentos_etica_compliance = "Não basta que a empresa tenha regramentos orientado a ética dos funcionários. É preciso que sempre estes aspectos sejam lembrados aos colaboradores e terceiros. A existência de treinamentos sem dúvida minimiza riscos relacionados a estas questões éticas. Confira nosso artigo sobre o tema em <a target='_blank' href='https://luiznobrega.com/comunicacao-e-treinamento/'>https://luiznobrega.com/comunicacao-e-treinamento/</a>";

} else if($treinamentos_etica_compliance == "nao"){

	$pontuacao += 8;

	$msg_treinamentos_etica_compliance = "Não basta que a empresa tenha regramentos orientado a ética dos funcionários. É preciso que sempre estes aspectos sejam lembrados aos colaboradores e terceiros. A ausência de treinamentos sem dúvida potencializa riscos relacionados a estas questões éticas. Confira nosso artigo sobre o tema em <a target='_blank' href='https://luiznobrega.com/comunicacao-e-treinamento/'>https://luiznobrega.com/comunicacao-e-treinamento/</a>";

} 



if($compliance_efetivo == "sim"){

	$pontuacao += 2;

	$msg_compliance_efetivo = "Parabéns! Sua empresa está protegida e buscando a todo tempo a integridade. Isso não elimina todos os riscos, mas sem dúvida os torna mais controlados e menos impactantes a existência e sobrevivência de sua empresa.

Provérbios 10:9 “Quem anda com integridade, anda com segurança”

";

} else if($compliance_efetivo == "nao"){

	$pontuacao += 10;

	$msg_compliance_efetivo = "Acenda a luz amarela. A ausência de um programa de integridade, o não mapeamento de riscos, a inexistência de políticas claras, códigos de conduta, trazem riscos enormes às empresas. É como se estivessem ao lado de uma piscina de gasolina e fumando. A qualquer momento explosões podem e irão acontecer.

Busque a integridade, ela te traz segurança.

Provérbios 10:9 “Quem anda com integridade, anda com segurança”

";

} 





if($pontuacao <= 105){

	$perfil = "risco muito baixo";

	$imagem_perfil_risco = "images/missao.png";

	$msg_perfil_risco = "Empresa com excelentes mecanismos de integridade e preocupada com aspectos de Compliance bastante evidentes. Dentro do que se espera do Pilar de Monitoramento dentro do programa de Compliance sempre é importante revisar controles, políticas e investir em treinamento de forma constante. Revisar riscos e tratar de proceder ajustes que visem a buscar frequente da integridade.";

} else if($pontuacao <= 130){

	$perfil = "risco baixo";

	$imagem_perfil_risco = "images/carraca.png";

	$msg_perfil_risco = "Empresa com bons mecanismos de integridade e com interesse nos aspectos de Compliance bastante evidentes. Dentro do que se espera do Pilar de Monitoramento dentro do programa de Compliance sempre é importante revisar controles, políticas e investir em treinamento de forma constante. Revisar riscos e tratar de proceder ajustes que visem a buscar frequente da integridade.";

} else if($pontuacao <= 155){

	$perfil = "risco medio";

	$imagem_perfil_risco = "images/incerteza.png";

	$msg_perfil_risco = "Empresa com alguns mecanismos de integridade e sem muitos aspectos de Compliance em suas operações. É importante revisar controles, políticas e investir em treinamento de forma constante. Mapear riscos e tratar de proceder ajustes que visem a buscar frequente da integridade.

Alertamos para riscos diversos, como por exemplo os ligados à questões fiscais bem como ausência de conhecimento a riscos de maneira geral que podem levar a descontinuidade da empresa!

";

} else if($pontuacao <= 180){

	$perfil = "risco alto";

	$imagem_perfil_risco = "images/erro.png";

	$msg_perfil_risco = "Empresa com poucos mecanismos de integridade e com pouca preocupação com aspectos de Compliance. É vital a implantação controles internos, políticas e investimento em treinamento de forma constante. Promover o mapeamento de riscos e tratar de proceder ajustes que visem a buscar frequente da integridade.

Alertamos para riscos diversos, como por exemplo os  ligados à questões fiscais bem como ausência de conhecimento a riscos de maneira geral que podem levar a descontinuidade da empresa!

";

} else if($pontuacao <= 205){

	$perfil = "risco elevado";

	$imagem_perfil_risco = "images/alerta.png";

	$msg_perfil_risco = "Empresa com ausência de mecanismos de integridade e sem preocupação com aspectos de Compliance. É urgente a implantação de controles internos, políticas e investir em treinamento. Promover o mapeamento de riscos e tratar de proceder ajustes que visem a buscar frequente da integridade.

Alertamos para riscos diversos, como por exemplo os ligados à questões fiscais bem como ausência de conhecimento a riscos de maneira geral que podem levar a descontinuidade da empresa!

";

}





$destinatario = "compliance@lfnobrega.com"; //Seu e-mail vai aqui

//$destinatario = "luzenk@gmail.com"; //Seu e-mail vai aqui


 // monta o e-mail na variavel $body



$body = "===================================" . "\n";

$body = $body . "Dados das respostas" . "\n";

$body = $body . "===================================" . "\n\n";

$body = $body . "Pontuação:" . $pontuacao . "\n";

$body = $body . "===================================" . "\n";

$body = $body . "Tipo de empresa:" . $tipo_empresa . "\n";

$body = $body . "Regime tributario:" . $regime_tributario . "\n";

$body = $body . "Localização da matriz:" . $localizacao_matriz . "\n";

$body = $body . "Filiais no exterior:" . $filiais_exterior . "\n";

$body = $body . "Exportação:" . $exportacao . "\n";

$body = $body . "Importação:" . $importacao . "\n";

$body = $body . "Desenvolve matriz de risco:" . $desenvolve_matriz_risco . "\n";

$body = $body . "Desenvolve controles internos eficientes:" . $desenvolve_controles_internos_eficientes . "\n";

$body = $body . "Código de ética / Manual de conduta:" . $codigo_etica_manual_conduta . "\n";

$body = $body . "Políticas de compras e escolha de fornecedores:" . $politicas_compras_escolha_fornecedores . "\n";

$body = $body . "Conhece as leis anticorrupção:" . $conhece_lei_anticorrupcao . "\n";

$body = $body . "Protegida pda lei anticorrupção:" . $protegida_lei_anticorrupcao . "\n";

$body = $body . "Conhece a lei de lavagem de dinheiro:" . $conhece_lei_lavagem_dinheiro . "\n";

$body = $body . "Programa PLD:" . $programa_pld . "\n";

$body = $body . "Numero de colaboradores:" . $colaboradores . "\n";

$body = $body . "Canal de denuncias:" . $canal_denuncias . "\n";

$body = $body . "Due diligence:" . $due_diligence . "\n";

$body = $body . "Representantes:" . $representantes . "\n";

$body = $body . "Conhece LGPD:" . $conhece_LGPD . "\n";

$body = $body . "Esta preparada para LGPD:" . $preparada_lgpd . "\n";

$body = $body . "Negócios com entes publicos:" . $negocios_entes_publicos . "\n";

$body = $body . "Treinamentos de ética e compliance:" . $treinamentos_etica_compliance . "\n";

$body = $body . "Compliance efetivo:" . $compliance_efetivo . "\n";

$body = $body . "===================================" . "\n";



// envia o email

mail($destinatario, 'Calculadora de riscos' , $body, "From: Luiz Nobrega!\r\n");





 ?>



<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">

		<title>Calculadora de riscos</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta name="author" content="marlonhenrique.com">



		<!-- MATERIAL DESIGN ICONIC FONT -->

		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">



		<!-- DATE-PICKER -->

		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">



		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">



		<!-- STYLE CSS -->

		<link rel="stylesheet" href="css/style.css">

	</head>

	<body>



		<div class="wrapper">

			<div class="container">	

				<div class="row">	

					<div class="col-12 text-center" style="padding: 2%;">	

						<h1>Confira Seu Diagnostico</h1>

					</div>

				</div>

				<div class="row align-middle" style="padding: 2%">

					<div class="col align-middle">	

						<img src="<?php echo $imagem_perfil_risco; ?>" alt="resultado imagem" style="width: 70%; display: table; margin: auto;">

					</div>

					<div class="col align-middle">

						<h2 style="text-transform: uppercase;font-weight: 600; font-size: 2.3em;"><?php 	echo $perfil; ?></h2>

						<span style="font-size: 2em; font-weight: 600;"><?php echo $pontuacao; ?> Pontos</span>

						<hr style="background: #ffffff; height: 5px;">	

						<p style="font-size: 1.3em;"><?php 	echo $msg_perfil_risco; ?></p>

					</div>

				</div>

				<div class="row text-center" style="padding: 2%;">

					<div class="col-12">

						<h2 style="text-transform: uppercase;">Confira detalhes sobre sua pontuação e seu diagnostico</h2>

						<hr style="background: #ffffff; height: 5px; width: 70%;">

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">Regime Tributário</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_regime_tributario; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">Localização da Matriz</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_localizacao_matriz; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">Filiais no Exterior</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_filiais_exterior; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">Exportação</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_exportacao; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">Importação</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_importacao; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">A empresa desenvolve uma Matriz de Riscos?</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $mgs_desenvolve_matriz_risco; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">A empresa tem controles internos e eficientes?</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_desenvolve_controles_internos_eficientes; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">A empresa possuí um Código de Ética/Manual de Conduta?</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_etica_manual_conduta; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">A empresa possuí políticas para Compras, escolha de fornecedores e outras?</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_politicas_compras_escolha_fornecedores; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">Sua empresa conhece as implicações da Lei 12.846/2013 a Lei Anticorrupção?</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_conhece_lei_anticorrupcao; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">Sua empresa está protegida para não sofrer as sansões da Lei 12.846/2013 a Lei Anticorrupção?</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_protegida_lei_anticorrupcao; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">Sua empresa conhece as implicações da Lei 9.613/98 a Lei de Lavagem de Dinheiro?</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_conhece_lei_lavagem_dinheiro; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">Sua empresa tem algum Programa de PLD - Prevenção à Lavagem de Dinheiro?</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_programa_pld; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">Número de Colaboradores</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_colaboradores; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">A empresa tem um canal de denúncias?</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_canal_denuncias; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">A empresa faz Due Diligence de Terceiros/Fornecedores?</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_due_diligence; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">A empresa usa representantes comerciais/despachantes ou outros terceiros que lhe representem?</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_representantes; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">Sua empresa conhece as implicações da Lei 13.709/2018 a chamada LGPD?</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_conhece_LGPD; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">Sua empresa está preparada para não sofrer as sansões da Lei 13.709/2018 a chamada LGPD?</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_preparada_lgpd; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">Sua empresa tem negócios com entes públicos?</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_negocios_entes_publicos; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">A empresa disponibiliza treinamentos relacionados com temas de ética e compliance?</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_treinamentos_etica_compliance; ?></p>

					</div>

					<div class="col-6">

						<h3 style="text-transform: uppercase; margin-bottom: -5px;">A empresa tem um programa de Compliance EFETIVO?</h3>

						<hr style="background: #ffffff; height: 5px; width: 50%;">

						<p style="font-size: 1.3em;"><?php echo $msg_compliance_efetivo; ?></p>

					</div>

				</div>

				<hr style="background: #ffffff; height: 5px; width: 70%;">

				<div class="row text-center" style="padding: 2%;">

					<div class="col">

						<a href="#" class="btn btn-warning" style="padding: 3% 10%;border-radius: 35px;font-weight: 500;font-size: 18px;" onclick="window.print();">Imprimir</a>

					</div>

					<div class="col">

						<a target='_blank' href="https://api.whatsapp.com/send?phone=5514991152539&text=Ol%C3%A1%2C%20vim%20atraves%20da%20calculadora%20de%20riscos%2C%20gostaria%20de%20falar%20com%20um%20especialista%20" class="btn btn-success" style="padding: 3% 10%;border-radius: 35px;font-weight: 500;font-size: 18px;">Converse Com O Especialista</a>

					</div>

					<div class="col">

						<a href="http://luiznobrega.com/" class="btn btn-danger" style="padding: 3% 10%;border-radius: 35px;font-weight: 500;font-size: 18px;">Voltar Para O Site</a>

					</div>

				</div>

			</div>

		</div>



		<script src="js/jquery-3.3.1.min.js"></script>

		

		<!-- JQUERY STEP -->

		<script src="js/jquery.steps.js"></script>



		<!-- DATE-PICKER -->

		<script src="vendor/date-picker/js/datepicker.js"></script>

		<script src="vendor/date-picker/js/datepicker.en.js"></script>



		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



		<script src="js/main.js"></script>

<!-- Template created and distributed by Colorlib -->

</body>

</html>