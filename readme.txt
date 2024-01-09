=== Mask Form Elementor ===
Tags: máscara, formulário, elementor, mask, form, email, input, field, phone, masks, fields,
Requires at least: 5.0
Tested up to: 5.7.2
Requires PHP: 5.6
Stable tag: 2.3
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Plugin para incluir máscaras nos formulários (compatível com qualquer plugin de formulário que tenha opção para inserir classes e ids personalizadas).

== Descrição ==

O Mask Form Elementor utiliza a biblioteca jQuery para inserir máscaras no formulário do Elementor Builder e em qualquer outro plugin de formulário que tenha disponível a opção para inserir classes e ids personalizadas nos campos.

Para utilizar o plugin no Elementor basta selecionar o tipo do campo diretamente pelo widget do form.

Nessa última atualização está disponível as classes para tornar o plugin compatível com outros tipos de formulários além do Elementor.
Para aplicar é bem simples, basta inserir a classe dentro dos campos do seu formulário.


== Opções de Máscaras ==

<ul>
<li>Data: 00/00/0000</li>
<li>Horário: 00:00:00</li>
<li>Data e Horário: 00/00/0000 00:00:00</li>
<li>CEP: 00000-000</li>
<li>Telefone sem DDD: 0000-0000</li>
<li>Telefone: (00) 0000-0000</li>
<li>Telefone com nono digito: (00) X0000-0000</li>
<li>Cpf ou Cnpj: 000.000.000-00 <b>ou</b> 00.000.000/0000-00</li>
<li>CPF: 000.000.000-00</li>
<li>CNPJ: 00.000.000/0000-00</li>
<li>Monetário: 000.000.000.000.000,00</li>
<li>Endereço de IP: 000.000.000.000</li>
<li>Porcentagem: 000,00%</li>
<li>Placa: XXX-0000 <b>ou</b> XXX0X00 (Novo padrão Mercosul)<br /><i>Obs. Aplicar manualmente via ID/Class</i></li>
<li>Nome de Usuário: Restrição de caracteres especiais<br /><i>Obs. Aplicar manualmente via ID/Class</i></li>
<li>Cartão de Crédito (número): 0000-0000-0000-0000</li>
<li>Cartão de Crédito (validade): 00/00</li>
</ul>

**Para utilizar de forma manual, adicione a Class/ID em um campo tipo texto:**

mascara_data
mascara_hora
mascara_data_hora
mascara_cep
mascara_telefone
mascara_telefone_ddd
mascara_telefone_nono_digito
mascara_cpf_ou_cnpj
mascara_cpf
mascara_cnpj
mascara_monetario
mascara_ip
mascara_porcentagem
mascara_placa
mascara_usuario
mascara_cartaon
mascara_cartaod

Observações (para quem utiliza IDs):
Para evitar conflitos com IDs repetidos na mesma página, você pode optar por IDs diferentes "2", "3" e "4", veja os exemplos:

Campo 1: mascara_telefone_nono_digito
Campo 2: mascara_telefone_nono_digito2
Campo 3: mascara_telefone_nono_digito3
Campo 4: mascara_telefone_nono_digito4

Basta incluir no final do ID o número de 2 à 4 (válido para todas as máscaras).
ESSA OPÇÃO É SOMENTE PARA A UTILIZAÇÃO DE IDs (classes repetidas não geram conflitos).


== Changelog ==

<ul>
	<li>
		<b>Versão 1.0</b><br />
		- Versão inicial.
	</li>
	<li>
		<b>Versão 2.0</b><br />
			<u>Melhoria:</u><br/>
				- Versão aprimorada com opção para selecionar a máscara diretamente no widget do elementor form.
	</li>
	<li>
		<b>Versão 2.1</b><br />
			<u>Melhoria:</u><br/>
				- Nova máscara para placas de identificação de veículos, com o novo padrão Mercosul.
	</li>
	<li>
		<b>Versão 2.2</b><br />
			<u>Melhoria:</u><br/>
				- Nome de usuário, número e validade de cartões.
	</li>
	<li>
		<b>Versão 2.3</b><br />
			<u>Compatibilidade:</u><br/>
				- Agora você pode aplicar as máscaras em qualquer plugin de formulário que tenha opção para inserir classes e ids personalizadas.
	</li>
	<li>
		<b>Versão 3</b><br />
			<u>Correções:</u> <br />
				- Corrigido o erro das máscaras que não estavam funcionando em modal/popup<br />
				- A máscara Data e Hora não estava funcionando corretamente<br />
			<u>Melhorias:</u> <br />
				- Agora você pode preencher o campo com a máscara através do teclado númerico no celular/tablet ao invés do telado alfanumérico<br />
			<u>Removido:</u> <br />
				- Máscaras de nome de usuário e placas de identificação de veículos<br />
				<i>Observações: As máscaras foram removidas do seletor de campos no widget do elementor form, mas podem ser utilizadas manualmente via ID/Class, confira o site demo.</i>
	</li>
</ul>