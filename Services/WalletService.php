<?php
namespace Modules\WalletModule\Services;

use Modules\WalletModule\Entities\Wallet;

class WalletService{

 //class attributes
    public $user_id;
    public $balance;

    public function createWallet()
    {
        return wallet::create(
            [
                'user_id'  =>$this->user_id,
                'balance'  =>$this->balance,
            ]
        );
    }

    public function updateWallet(Wallet $wallet)
    {
         $wallet->update(
            [
                'user_id'    =>$this->user_id,
                'balance'   =>$this->balance,
            ]
        );
        return Wallet::find($wallet->id);

    }

    /**
     * @param mixed $user_id
     */
    public function setUserID($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }


    /**
     * @param mixed $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
        return $this;
    }

}