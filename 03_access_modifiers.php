<!-- Access Modifiers
public: Accessible from anywhere.
private: Accessible only within the class.
protected: Accessible within the class and subclasses. -->

<?php
    class Teachers{
        private function questionPapers(){
            return "important";
        }

        public function exam(){
            if($this->questionPapers()=="important"){
                echo "do something";
            }
            else{
                echo " do else";
            }
        }

        protected function studentMarks(){
            echo "all students marks";
        }
    }

    class Management extends Teachers{
        function reviewExams(){
            $this->studentMarks();
        }
    }

    $t1 = new Teachers();

    $m1 = new Management();
    $m1->reviewExams();

    // $t1->questionPapers();
    // $t1->studentMarks();
?>