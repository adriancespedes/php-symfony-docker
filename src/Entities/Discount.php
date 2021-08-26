<?php
namespace App\Entities;

class Discount
{

    private int $id;
    private string $name;
    private ?string $description;
    private ?\DateTimeImmutable $validUntil;
    private ?float $discountPercentage;
    private Operator $operator;
    private Addressee $addressee;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getValidUntil(): ?\DateTimeImmutable
    {
        return $this->validUntil;
    }

    /**
     * @param \DateTimeImmutable|null $validUntil
     */
    public function setValidUntil(?\DateTimeImmutable $validUntil): void
    {
        $this->validUntil = $validUntil;
    }

    /**
     * @return float|null
     */
    public function getDiscountPercentage(): ?float
    {
        return $this->discountPercentage;
    }

    /**
     * @param float|null $discountPercentage
     */
    public function setDiscountPercentage(?float $discountPercentage): void
    {
        $this->discountPercentage = $discountPercentage;
    }

    /**
     * @return Operator
     */
    public function getOperator(): Operator
    {
        return $this->operator;
    }

    /**
     * @param Operator $operator
     */
    public function setOperator(Operator $operator): void
    {
        $this->operator = $operator;
    }

    /**
     * @return Addressee
     */
    public function getAddressee(): Addressee
    {
        return $this->addressee;
    }

    /**
     * @param Addressee $addressee
     */
    public function setAddressee(Addressee $addressee): void
    {
        $this->addressee = $addressee;
    }


}