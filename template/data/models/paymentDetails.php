<?php
    require_once('data_provider.php');

    class PaymentDetails extends DataProvider{

        public function setPaymentDetails($payment_Schedule, $name, $bill_Number, $amount_Paid, $balance_Amount){

            $db = $this->connect();
            
            if($db == null){
                return;
            }

            $sql = "INSERT INTO payment_details (payment_Schedule,name, bill_Number, amount_Paid, balance_Amount) 
                        VALUES (:payment_Schedule, :name, :bill_Number, :amount_Paid, :balance_Amount)";
            $smt = $db->prepare($sql);

            $smt->execute(
                [
                    ":payment_Schedule"=> $payment_Schedule,
                    ":name"=> $name,
                    ":bill_Number"=> $bill_Number,
                    ":amount_Paid"=> $amount_Paid,
                    ":balance_Amount"=> $balance_Amount
                ]
            );

            $smt = null;
            $db = null;
        }

        public function getAllPaymentDetails(){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $query = $db->query('SELECT * FROM payment_details');

            $data = $query->fetchAll(PDO::FETCH_ASSOC);

            $query = null;
            $db = null;

            return $data;
        }
        public function getTotalAoundPaid(){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $query = $db->query('SELECT sum(amount_Paid) FROM payment_details');

            $number = $query->fetchColumn();

            $query = null;
            $db = null;

            return $number;
        }
    }

?>