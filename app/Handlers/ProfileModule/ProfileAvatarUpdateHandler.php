<?php
namespace App\Handlers\ProfileModule;

use App\DAO\UserDAO;
use App\Handlers\BaseHandler;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Storage;

class ProfileAvatarUpdateHandler extends BaseHandler
{

    protected function handle()
    {
        $user = Auth::user();
        DB::beginTransaction();
        if (isset($user)){
            $userDAO = new UserDAO();

            $checkedUser = $userDAO->findOneBy(['email' => $user->email]);
            if (isset($checkedUser)){
                $file = $this->request['avatar'];
                // Checks if the file is retrieved
                if ($file){
                    $avatar = $checkedUser->id.'_avatar_'.time().'_'.$file->getClientOriginalName();
                    $file->storeAs('avatars',$avatar, 'public_uploads');
                    $userDAO->update($checkedUser, ['avatar' => $avatar]);
                    DB::commit();
                    $this->setData(['avatar' => $avatar]);
                }
                else{
                    $this->addError(Lang::trans('message.api.profile.avatar.file.error'));
                    DB::rollback();
                }   
            }
            else{
                $this->addError(Lang::trans('message.api.auth.error'));
                DB::rollback();
            }
               
        }

    }

    /**
     * Returns the validation array
     * @return array|mixed
     */
    public function validationRules()
    {
        return [
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1080',
            'email' => 'required|string|email|max:255'
        ];
    }
}
	