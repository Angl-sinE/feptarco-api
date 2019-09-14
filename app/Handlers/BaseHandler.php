<?php 
namespace App\Handlers;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Request;
use App\DAO\AppExceptionDAO;
use App\Model\AppException;
/**
* Contains all the base methods for all handlers
**/
abstract class BaseHandler
{

    /**
     * Array of parameters sent to the handler
     * @var array
     */

    protected $parameters = [];

     /**
     * @var request
     * Request data sent from the controller
     */
    protected $request =  [];


    /**
     * Request method type
     * @var string
     */
    protected $method = '';

    /**
     * @var boolean
     * Success flag
     */
    private $success = true;
    
    /**
     * @var array
     * Rules array
     */
    private $rules = [];

     /**
     * @var errors
     * Errors array
     */
    private $errors = [];

     /** @var array  */
    private $data = [];


    /**
     * BaseHandler constructor.
     * @param array $requestData
     * @param String $method
     * @param String $parameters
     */
    public function __construct(String $method, array $requestData, array $parameters = null)
    {
        $this->request = $requestData;
        $this->method = $method;
        $this->parameters = $parameters;
        $this->rules = $this->validationRules();
       
    }
    /**
     * Executes the handler
     * 
     */
    public function processHandler()
    {
        $this->checkRules();

         if ($this->isSuccess()) {

             $this->handle();
             try {

            } catch (\Exception $ex) {
                  Log::error(json_encode($ex));
                  $this->addError(Lang::trans('message.exception.handler.generalError').' '.$ex->getMessage());

            }

       }
    }

    /**
     * Checks Request rules
     */
    private function checkRules()
    {
        $validator = Validator::make($this->request,$this->rules);

        if ($validator->fails()) {
            $errors = $validator->errors();

            foreach ($errors->all() as $error) {
                $this->addError($error);
            }
        }
    }

    
    /**
     * Implements the handler,any class that extends from
     * BaseHandler must instantiate the function as well as 
     * the method processHandler
     */
    abstract protected function handle();

    /**
     * Validation rules for parameters
     * requestData may be use to change the rules array
     * @param array $requestData
     * @return mixed
     */
    abstract public function validationRules();


    public function setValidationRules(array $rules)
    {
        $this->rules = $rules;
    }

    public function isSuccess()
    {
        return $this->success;
    }

    /**
     * Returns data from process
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets data from process
     *
     * @param $data
     */
    public function setData($data)
    {
        $this->data[] = $data;
    }

    /**
     * Returns empty data array as a response
     * @return array
     */
    public function setEmptyData(){
        return $this->data;
    }

     /**
     * Adds an error 
     *
     * @param $error
     * @return $this
     */
    protected function addError($error)
    {
        $this->success = false;
        $this->errors[] = $error;

        return $this;
    }

    /**
     * Returns all registered errors
     *
     * @return array
     */
    public function getErrors()
    {
        return ['errors' => $this->errors];
    }

    /**
     * Sets the request parameters for the handler
     *
     * @param array $request
     */
    public function setRequest(array $request)
    {
        $this->request = $request;
    }

    /**
     * Sets a request parameter
     *
     * @param $key
     * @param $value
     */
    public function setRequestParam($key, $value)
    {
        $this->request[$key] = $value;
    }

    /**
     * Gets a request parameter
     *
     * @param $key
     * @return null
     */
    public function getRequestParam($key)
    {
        return isset($this->request[$key]) ?
            $this->request[$key] :
            null;
    }

}
