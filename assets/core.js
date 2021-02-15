'use strict'




async function Login() {
    event.preventDefault()

    const loginvalue = document.getElementById("login").value
    const passwordvalue = document.getElementById("password").value
    const nameLogedUser = document.getElementById("logedUser")

    var myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/x-www-form-urlencoded");

    var urlencoded = new URLSearchParams();
    urlencoded.append("login", loginvalue);
    urlencoded.append("senha", passwordvalue);

    var requestOptions = {
        method: 'POST',
        headers: myHeaders,
        body: urlencoded,
        redirect: 'follow'
    };
    fetch("http://192.168.175.212:8081/login", requestOptions)
        .then(response => {
            if (!response.ok) {
                throw Error(response.statusText)
            }
            return response.json()
        })
        .then(result => {

            localStorage.setItem("authtoken", result.token)
            localStorage.setItem("_id", result.body._id)
            localStorage.setItem("nomeusuario", result.body.nome)

            const obj = result.body.nome
            window.location.replace('http://192.168.175.212/index')
            console.log(localStorage.getItem("authtoken"))

        })
        .catch(error => console.log('error', error));
}



function Logoff() {
    event.preventDefault

    localStorage.clear("authtoken")

    window.location.replace('http://192.168.175.212/login.php')
}


function AbrirPasta() {

    var nmPasta = document.getElementById("mainInput").value
    open("http://192.168.175.212/processos/pasta?p=" + nmPasta)

}
//Carregar ficha do processo
function CarregarProcesso() {
    CarregarPasta()
    AudienciasPasta()
    AndamentosPasta()
    PrazosAdmPasta()
    ProtocolosPasta()
}

async function CarregarPasta() {
    let CodUrl = window.location.href
    let url = new URL(CodUrl)
    let past = url.searchParams.get("p")


    fetch('http://192.168.175.212:8081/processos/pasta/' + past, {
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + localStorage.getItem("authtoken")
        },
    })
        .then(response => response.json())
        .then(result => {
            console.log(result)
            result.forEach((item) => {
                document.getElementById("cPasta").innerHTML = item.Pasta
                document.getElementById("cTipoAcao").innerHTML = item.TipoAcao
                document.getElementById("cObjetoAcao").innerHTML = item.ObjAcao
                document.getElementById("cIdCliente").innerHTML = item.CodCliente
                document.getElementById("cNumeroProcesso").innerHTML = item.Processo
                document.getElementById("cVara").innerHTML = item.Vara
                document.getElementById("cForum").innerHTML = item.Forum
                document.getElementById("cPartesContrarias").innerHTML = item.ParteSContrarias
                document.getElementById("cObservacoesDaParte").innerHTML = item.EnderecoParteContraria
                document.getElementById("cNomeCliente").innerHTML = item.Cliente
                document.getElementById("cCpfCliente").innerHTML = item.CPF
                document.getElementById("cDataPrazoJur").innerHTML = item.Prazo
                document.getElementById("cResponsavelPrazoJur").innerHTML = item.Colaborador
                document.getElementById("cFinalidadeJur").innerHTML = item.FinalidadeDoPrazo


            })
        })

}

async function AudienciasPasta() {

    let CodUrl = window.location.href
    let url = new URL(CodUrl)
    let numPasta = url.searchParams.get("p")
    const datatarget = document.getElementById("cAudiencias")

    fetch('http://192.168.175.212:8081/audiencias/pasta/' + numPasta, {
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + localStorage.getItem("authtoken"),
        },
    })
        .then(response => response.json())
        .then(result => {
            //  console.log(result)
            result.forEach((item) => {

                const date = new Date(item.DataDaAudiencia).toLocaleDateString("pt-br", { timeZone: "UTC" })
                const exibiraudiencias = document.createElement("tr")

                //  exibirandamento.className = "row mt-2"
                exibiraudiencias.innerHTML =
                    '<td><small>' + date + '</small></td>' +
                    '<td><small>' + item.Horario + '</small></td>' +
                    '<td><small class="d-inline-block text-truncate" style="max-width: 200px">' + item.Audiencia + '</small></td>' +
                    '<td><small class="d-inline-block text-truncate" style="max-width: 500px">' + item.AnotacoesAudiencia + '</small></td>' +
                    '<td><small>' + item.Advogado + '</small> </td>' +
                    '<td><small>Acordo</small></td>'
                '<td><a href="http://192.168.175.212/clientes/ficha?cod=' + "item.Cod_cli" + '"><i class="mr-1 fas fa-edit"></i></a></td>'
                datatarget.appendChild(exibiraudiencias)

            })
        })
}

async function ProtocolosPasta() {

    let CodUrl = window.location.href
    let url = new URL(CodUrl)
    let numPasta = url.searchParams.get("p")
    const datatarget = document.getElementById("cProtocolos")

    fetch('http://192.168.175.212:8081/processos/protocolospasta/' + numPasta, {
        header: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + localStorage.getItem("authtoken")
        },
    })
        .then(response => response.json())
        .then(result => {
            result.forEach((item) => {

                console.log(result)

                let exibirprazosadm = document.createElement("tr")
                const date = new Date(item.DataProt).toLocaleDateString("pt-br", { timeZone: "UTC" })

                exibirprazosadm.innerHTML =
                    '<td><div class="col"><small>' + date + '</small></div></td>' +
                    '<td><small class="d-inline-block text-truncate" style="max-width: 500px">' + item.NumeroProt + '</small></td>' +
                    '<td><small class="d-inline-block text-truncate" style="max-width: 150px">' + item.DescProt + '</small></td>' +
                    '<td><small class="d-inline-block text-truncate" style="max-width: 200px">' + item.LocDeProtocolo + '</small></td>' +
                    '<td><small>' + item.ResponsavelProt + '</small></td>' +
                    '<td><small>' + item.ResponsavelPeticao + '</small></td>' +
                    '<td><a href="http://192.168.175.212/clientes/ficha?cod=' + "#" + '"><i class="mr-1 fas fa-edit"></i></a></td>'

                datatarget.appendChild(exibirprazosadm)
            })
        })

}


async function PrazosAdmPasta() {

    let CodUrl = window.location.href
    let url = new URL(CodUrl)
    let numPasta = url.searchParams.get("p")
    const datatarget = document.getElementById("CPrazosAdministrativos")

    fetch('http://192.168.175.212:8081/processos/prazosadmpasta/' + numPasta, {
        header: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + localStorage.getItem("authtoken")
        },
    })
        .then(response => response.json())
        .then(result => {
            result.forEach((item) => {
                let exibirprazosadm = document.createElement("tr")
                const date = new Date(item.DataDoPrazoAdm).toLocaleDateString("pt-br", { timeZone: "UTC" })

                exibirprazosadm.innerHTML =
                    '<td><div class="col"><small>' + date + '</small></div></td>' +
                    '<td><small class="d-inline-block text-truncate" style="max-width: 500px">' + item.Descricao + '</small></td>' +
                    '<td><small class="d-inline-block text-truncate" style="max-width: 150px">' + item.Responsavel + '</small></td>' +
                    '<td><small class="d-inline-block text-truncate" style="max-width: 200px">' + item.CriadoPor + '</small></td>' +
                    '<td><small>' + item.Situacao + '</small></td>' +
                    '<td><a href="http://192.168.175.212/clientes/ficha?cod=' + "item.Cod_cli" + '"><i class="mr-1 fas fa-edit"></i></a></td>'

                datatarget.appendChild(exibirprazosadm)
            })
        })

}

async function AndamentosPasta() {

    let CodUrl = window.location.href
    let url = new URL(CodUrl)
    let numPasta = url.searchParams.get("p")
    const datatarget = document.getElementById("result-andamentos")

    fetch('http://192.168.175.212:8081/processos/andamentos/' + numPasta, {
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + localStorage.getItem("authtoken"),
        },
    })
        .then(response => response.json())
        .then(result => {
            //    console.log(result)
            result.forEach((item) => {

                const date = new Date(item.andData)
                let exibirandamento = document.createElement("div")

                //  exibirandamento.className = "row mt-2"
                exibirandamento.innerHTML =
                    '<div class="row mt-2">' +
                    '<div class="col">' +
                    '<div class="card">' +
                    '<div class="card-header text-left py-1 bg-primary">' +
                    '<small class="text-white m-0">' + date.toLocaleDateString("pt-br", { timeZone: "UTC" }) + ' por ' + item.andUsuario + '</small>' +

                    '</div>' +
                    '<div class="col shadow">' +
                    '<small>Tipo do andamento: Contato</small>' +
                    '<p>' + item.andAndamento + '</p></div></div></div></div>'
                datatarget.appendChild(exibirandamento)

            })
        })
}





//Ficha do cliente #####################
//Carrega a ficha dos clientes
async function CarregarFicha() {

    let CodUrl = window.location.href
    let url = new URL(CodUrl)
    let c = url.searchParams.get("cod")

    console.log(c)
    fetch('http://192.168.175.212:8081/clientes/ficha/' + c, {
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + localStorage.getItem("authtoken"),
        },
    })
        .then(response => response.json())
        .then(result => {
            result.forEach((item) => {

                const dataNascimento = new Date(item.Nascimento)

                document.getElementById("cId").value = item.Cod_cli
                document.getElementById("cNome").value = item.Cliente
                document.getElementById("cNascimento").value = dataNascimento.toLocaleDateString("pt-br", { timeZone: "UTC" })
                document.getElementById("cGenero").value = item.Sexo
                document.getElementById("cNacionalidade").value = item.Nacionalidade
                document.getElementById("cCep").value = item.CEP
                document.getElementById("cEndereco").value = item.Endereco
                document.getElementById("cNumero").value = item.Numero
                document.getElementById("cComplemento").value = item.Complemento
                document.getElementById("cBairro").value = item.Bairro
                document.getElementById("cCidade").value = item.Cidade
                document.getElementById("cUf").value = item.UF
                document.getElementById("cTelefone1").value = item.Telefone
                document.getElementById("cTelefoneFixo").value = item.TelefoneFixo
                document.getElementById("cTelefone2").value = item.Telefone2
                document.getElementById("cEmail").value = item.EMail
                document.getElementById("cRg").value = item.RG
                document.getElementById("cCpf").value = item.CPF
                document.getElementById("cProfissao").value = item.Profissao
                document.getElementById("cPis").value = item.PIS
                document.getElementById("cCtps").value = item.CTPS
                document.getElementById("cSerieCTPS").value = item.Serie
                document.getElementById("cNomeDoPai").value = item.NomeDoPai
                document.getElementById("cNomeDaMae").value = item.NomeDaMae
                document.getElementById("cObservacoes").value = item.Observacoes
            })
        })
    PastasCliente()
}

//Carrega pastas do cliente
async function PastasCliente() {

    let CodUrl = window.location.href
    let url = new URL(CodUrl)
    let c = url.searchParams.get("cod")

    const datatarget = document.getElementById("pastas-cliente")

    fetch('http://192.168.175.212:8081/clientes/pastas/' + c, {
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + localStorage.getItem("authtoken"),
        },
    })
        .then(response => response.json())
        .then(result => {

            //   console.log(result)

            result.forEach((item) => {

                const date = new Date(item.DataCriacao)
                let exibirpastas = document.createElement("ul")


                exibirpastas.className = "list-group mb-3"
                exibirpastas.innerHTML =
                    '<li id="lista" class="border-left-primary list-group-item d-flex justify-content-between 1h-condensed">' +
                    '<div>' +
                    '<h6 class="my-0">' + item.ParteSContrarias + '</h6>' +
                    '<small class="text-wrap text-muted">' + item.Processo + '</small><br>' +
                    '<small class="text-muted">Aberta em: ' + date.toLocaleDateString("pt-br", { timeZone: "UTC" }) + '</small>' +
                    '</div>' +
                    '<div><a href="http://192.168.175.212/processos/pasta?p=' + item.Pasta + '"><h6 class="my-3">' + item.Pasta + '</h6></a></div>' +
                    '</li>'
                datatarget.appendChild(exibirpastas)

            })
        })
}



//Pesquisas - #############################
//Faz o chamado da função de procurar cliente
async function ProcurarCliente(criterio1) {
    event.preventDefault()
    const FetchUrl = 'http://192.168.175.212:8081/clientes/procurar/' + criterio1
    var options = { 'contentType': 'application/json' }
    await fetch(FetchUrl, {
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + localStorage.getItem("authtoken")
        },
    })
        .then(response => {
            if (!response.ok) {
                throw Error(response.statusText)
            }
            //console.log(Error)
            return response.json()
        })
        .then(data => ResProcurarCliente(data))
        .catch(err => console.log(err))

}


//Exibe o resultado da função de procurar cliente
function ResProcurarCliente(data) {
    const resultadorecebido = document.getElementById("result") // = list
    resultadorecebido.innerHTML = ""
    try {
        data.forEach((item) => {
            let exibitens = document.createElement("tr")

            const options = { year: "numeric", month: "long", day: "numeric" }
            const date = new Date(item.Nascimento)

            exibitens.innerHTML =
                '<td>' + item.Cod_cli + '</td>' +
                '<td>' + item.Cliente + '</td>' +
                '<td>' + item.RG + '</td>' +
                '<td>' + item.CPF + '</td>' +
                '<td>' + date.toLocaleDateString("pt-br", { timeZone: 'UTC' }) + '</td>' +
                '<td><a href="http://192.168.175.212/clientes/ficha?cod=' + item.Cod_cli + '"><i class="mr-1 fas fa-address-card"></i></a>'

            resultadorecebido.appendChild(exibitens)
        })
    } catch (error) {
        console.log(error)
    }
}

//Geral

function CarregaPrazosJuridicosDia() {
    const objetoalvo = document.getElementById("ctblPrazosJuridicos")
    var ContadorPrazo = document.getElementById("cPrazosJuridicos")

    let contarPrazos = 0
    fetch('http://192.168.175.212:8081/processos/prazosjuridicosdia', {
        headers: {
            'Content-type': 'application/json',
            'Authorization': 'Bearer ' + localStorage.getItem("authtoken"),
        }
    }).then(response => {
        if (response.status === 401) {
            window.location.replace('http://192.168.175.212/login.php')
        }

        return response.json()

    }).then(result => {
        result.forEach((item) => {

            contarPrazos++
            let exibiritens = document.createElement("tr")
            const prazo = new Date(item.Prazo)
            exibiritens.innerHTML =

                '<td class="border-left-primary text-left"><a href="http://192.168.175.212/processos/pasta?p=' + item.Pasta + '"><small class="my-3">' + item.Pasta + '</small></a></td>' +
                '<td><small class="d-inline-block text-truncate" style="width: 250px;">' + item.Processo + '</small></td>' +
                '<td><small class="d-inline-block text-truncate" style="width: 150px;">' + item.TipoAcao + '</small></td>' +
                '<td><small>' + prazo.toLocaleDateString("pt-br", { timeZone: 'UTC' }) + '</small></td>' +
                '<td><small class="d-inline-block text-truncate" style="width: 250px;">' + item.FinalidadeDoPrazo + '</small></td>' +

                '<td><small class="d-inline-block text-truncate" style="max-width: 150px;">' + item.Colaborador + '</small></a>'
            objetoalvo.appendChild(exibiritens)
        })
        //console.log(contarPrazos)
        ContadorPrazo.innerHTML = contarPrazos

    }).catch((error) => {
        console.log(error)
    })
}



function CarregaPrazosAdministrativosDia() {
    const objetoalvo = document.getElementById("ctblPrazosAdministrativos")
    var ContadorPrazo = document.getElementById("cPrazosAdministrativos")
    let contarPrazos = 0
    fetch('http://192.168.175.212:8081/processos/prazosadministrativosdia', {
        headers: {
            'Content-type': 'application/json',
            'Authorization': 'Bearer ' + localStorage.getItem("authtoken"),
        }
    })
        .then(response => {
            return response.json()
        })
        .then(result => {
            //      console.log(result)
            result.forEach((item) => {

                contarPrazos++
                let exibiritens = document.createElement("tr")
                const prazo = new Date(item.DataDoPrazoAdm)
                exibiritens.innerHTML =

                    '<td class="text-left"><a href="http://192.168.175.212/processos/pasta?p=' + item.Pasta + '"><small class="my-3">' + item.Pasta + '</small></a></td>' +
                    '<td><small class="d-inline-block text-truncate" style="max-width: 250px;">' + item.Processo + '</small></td>' +
                    '<td><small class="d-inline-block text-truncate" style="max-width: 150px;">' + item.TipoAcao + '</small></td>' +
                    '<td><small>' + prazo.toLocaleDateString("pt-br", { timeZone: 'UTC' }) + '</small></td>' +
                    '<td><small class="d-inline-block text-truncate" style="max-width: 250px;">' + item.Descricao + '</small></td>' +

                    '<td><small class="d-inline-block text-truncate" style="max-width: 150px;">' + item.Responsavel + '</small></a>'
                objetoalvo.appendChild(exibiritens)
                ContadorPrazo.innerHTML = contarPrazos
            })
        })
}
// Fim do principal


function FormatarData(Data) {
    var DataFinal = Data.split('/')
    var novaData = new Date(DataFinal[1] + '-' + DataFinal[0] + '-' + DataFinal[2])

    return novaData
}

async function AtualizarCliente() {

    const idCliente = document.getElementById("cId")
    const Cliente = document.getElementById("cNome")
    const Nascimento = document.getElementById("cNascimento").value
    const Genero = document.getElementById("cGenero")
    const Nacionalidade = document.getElementById("cNacionalidade")
    const Cep = document.getElementById("cCep")
    const Endereco = document.getElementById("cEndereco")
    const Numero = document.getElementById("cNumero")
    const Complemento = document.getElementById("cComplemento")
    const Bairro = document.getElementById("cBairro")
    const Cidade = document.getElementById("cCidade")
    const UF = document.getElementById("cUf")
    const Telefone = document.getElementById("cTelefone1")
    const Telefone2 = document.getElementById("cTelefone2")
    const Telefonefixo = document.getElementById("cTelefoneFixo")
    const EMail = document.getElementById("cEmail")
    const Profissao = document.getElementById("cProfissao")
    const RG = document.getElementById("cRg")
    const CPF = document.getElementById("cCpf")
    const Pis = document.getElementById("cPis")
    const Ctps = document.getElementById("cCtps")
    const Serie = document.getElementById("cSerieCTPS")
    const Nomedopai = document.getElementById("cNomeDoPai")
    const Nomedamae = document.getElementById("cNomeDaMae")
    const Observacoes = document.getElementById("cObservacoes")


    const requestData = {
        reqcodCliente: idCliente.value,
        reqCliente: Cliente.value,
        reqNascimento: FormatarData(Nascimento),
        reqSexo: Genero.value,
        reqNacionalidade: Nacionalidade.value,
        reqCep: Cep.value,
        reqEndereco: Endereco.value,
        reqNumero: Numero.value,
        reqComplemento: Complemento.value,
        reqBairro: Bairro.value,
        reqCidade: Cidade.value,
        reqUf: UF.value,
        reqTelefone: Telefone.value,
        reqTelefone2: Telefone2.value,
        reqTelefonefixo: Telefonefixo.value,
        reqEmail: EMail.value,
        reqProfissao: Profissao.value,
        reqRG: RG.value,
        reqCPF: CPF.value,
        reqPis: Pis.value,
        reqCtps: Ctps.value,
        reqSerie: Serie.value,
        reqNomedopai: Nomedopai.value,
        reqNomedamae: Nomedamae.value,
        reqObservacoes: Observacoes.value
    }

    const FetchUrl = 'http://192.168.175.212:8081/clientes/atualizar'

    await fetch(FetchUrl, {
        method: "POST",
        body: JSON.stringify(requestData),
        headers: { "Content-type": "application/json; charset=UTF-8" }
    })
        .then(response => {
            if (!response.ok) {
                throw Error(response.statusText)
            }
            return response.json()
        }).catch((err) => console.log(err))
}