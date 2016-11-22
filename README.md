# Consulta DataWash Library

Esse é um modulo para consulta DataWash

É necessario instanciar o Serviço com os dados de acesso.

    /**
     * DataWashService constructor.
     * @param \SoapClient $soap
     * @param $cliente
     * @param $usuario
     * @param $senha
     */
    public function __construct(\SoapClient $soap, $cliente, $usuario, $senha)
     
 $dataWashService = new DataWashService(new \SoapClient(DataWashEnum::DATAWASH), '##', '*', '##');
 
 e utilizar o metodo desejado, até agora só foi implementado os seguintes metodos:
 
    /**
     * @param $cnpj
     * @return PessoaJuridica
     */
    public function ConsultaCNPJ($cnpj);

    /**
     * @param $cpf
     * @return PessoaFisica
     */
    public function ConsultaCPFCompleta($cpf);
