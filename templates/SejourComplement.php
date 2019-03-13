
    /**
     * Retourne la date de fin de s�jour
     * @return mixed
     */
    public function getSejDteFin()
    {
        return $this->sejDteDeb + $this->sejDuree;
    }

    /**
     * Formatage jj-mm-aaaa 
     * @param $pDte : date � formater
     * @return mixed
     */
    public function getSejDteFormatFR($pDte)
    {
        return substr($pDte, -2).substr($pDte, -5, 2).substr($pDte, 4);
    }

