<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use ApiPlatform\Core\Annotation\ApiResource;


/**
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 * @Vich\Uploadable
 * @ApiResource(
 *     collectionOperations={"get", "post"},
 *     itemOperations={"get"}
 * )
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(type="text")
     */
    private ?string $content = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $author = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $email = null;

    /**
     * @ORM\ManyToOne(targetEntity=Lesson::class, inversedBy="comments")
     */
    private ?Lesson $lesson = null;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    private ?\DateTimeInterface $createdAt = null;

    /**
     * @Vich\UploadableField(mapping="comments_avatar", fileNameProperty="imageName")
     */
    private ?File $imageFile = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $imageName = null;

    /**
     * @ORM\Column(type="string", length=255, options={"default"="submitted"})
     *
     * @var string
     */
    private string $state = 'submitted';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getLesson(): ?Lesson
    {
        return $this->lesson;
    }

    public function setLesson(?Lesson $lesson): self
    {
        $this->lesson = $lesson;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(): void
    {
        $this->createdAt = new \DateTimeImmutable();
    }

    /**
     * @param File|null $imageFile
     *
     * @return static
     */
    public function setImageFile(?File $imageFile): self
    {
        $this->imageFile = $imageFile;

        return $this;
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImageName(?string $imageName): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @param string $state State
     *
     * @return static
     */
    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }
}
