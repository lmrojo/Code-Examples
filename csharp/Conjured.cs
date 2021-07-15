using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace csharp
{
    class Conjured : IItem
    {
        Item _item;
        public Conjured(Item item)
        {
            _item = item;
        }
        public void UpdateQuality()
        {
            if (_item.Quality >= 2 && _item.Quality <= 50)
            {
                _item.Quality = _item.Quality - 2;
            }
        }
    }
}
