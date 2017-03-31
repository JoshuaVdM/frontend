<?php
/**
 * Created by PhpStorm.
 * User: Ludo
 * Date: 31/03/2017
 * Time: 16:14
 */

namespace Integration\API\Traits;


trait ReturnTrait
{
    public function beautifulReturn($code, $extra = array())
    {
        switch ($code) {
            case 200:
                return $this->beautifulReturnMessage($code, $this->className . ' Successfully ' . $extra['Suffix'], (isset($extra[$this->className . 'Id'])) ? $extra : '');
                break;
            case 400:
                return $this->beautifulReturnMessage($code, $this->className . ' Bad Request', (isset($extra['Error'])) ? $extra : '');
                break;
            case 401:
                return $this->beautifulReturnMessage($code, 'Request Unauthorized', (isset($extra['Error'])) ? $extra : '');
                break;
            case 404:
                return $this->beautifulReturnMessage($code, $this->className . ' Not Found', (isset($extra['Error'])) ? $extra : '');
                break;
            case 405:
                return $this->beautifulReturnMessage($code, 'Method Not Allowed', (isset($extra['Error'])) ? $extra : '');
                break;
            case 406:
                return $this->beautifulReturnMessage($code, $this->className . ' Not Acceptable', (isset($extra['Error'])) ? $extra : '');
                break;
            case 460:
                return $this->beautifulReturnMessage($code, $this->className . ' Request Format Error', (isset($extra['Error'])) ? $extra : '');
                break;
            default:
                return $this->beautifulReturnMessage($code, $this->className . ' Unspecified Error', (isset($extra['Error'])) ? $extra : '');
                break;
        }
    }

    public function beautifulReturnMessage($code, $message, $extra = [])
    {
        $return = [
            'StatusCode' => $code,
            'StatusMessage' => $message
        ];

        if (!empty($extra)) {
            if ($code == 200)
            {
                if (array_has($extra, $this->className . 'Id'))
                    $return[$this->className . 'Id'] = $extra[$this->className . 'Id'];
                else
                    $return["Result"] = $extra;
                //$return[$this->className . 'ID'] = $extra;
            }
            else
            {
                $return['Error'] = $extra['Error'];
            }
        }


        return Response()->json($return);
    }
}