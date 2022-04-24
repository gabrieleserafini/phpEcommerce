<?php

    // namespace Models;


    class payement{
        static public function payer($total,$c_id,$pro_id){
           

            try{
                $stmt=DB::connect()->prepare('INSERT INTO payments (amount,customer_id,product_id) values (:total,:c_id,:pro_id)');
                $stmt->execute(array(
                    ':total' =>$total,
                    ':c_id' =>$c_id,
                    ':pro_id' =>$pro_id));
              
                
              
                $stmt=null;
        
            }catch(PDOException $ex){ echo "error".$ex->getMessage();
            }
        }
    
        static public function getPayment($data){
     
           try{
                $stmt=DB::connect()->prepare(" SELECT * FROM payments where customer_id=:c_id");
                $stmt->execute(['id'=>$data]);
                $row=$stmt->fetchAll();
           
                return $row;

                $stmt=null;
    
            }catch(PDOException $ex){ echo "error".$ex->getMessage();
            }
        }

    } 